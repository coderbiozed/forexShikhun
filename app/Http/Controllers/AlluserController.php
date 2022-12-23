<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAlluserRequest;
use App\Http\Requests\UpdateAlluserRequest;
use App\Repositories\AlluserRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Alluser;
use App\Models\Member;
use Flash;
use Response;
use DB;
use Auth;
use Hash;

class AlluserController extends AppBaseController
{
    /** @var AlluserRepository $alluserRepository*/
    private $alluserRepository;

    public function __construct(AlluserRepository $alluserRepo)
    {
        $this->alluserRepository = $alluserRepo;
    }

    /**
     * Display a listing of the Alluser.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $allusers = $this->alluserRepository->all();

        return view('allusers.index')
            ->with('allusers', $allusers);
    }

    /**
     * Show the form for creating a new Alluser.
     *
     * @return Response
     */
    public function create()
    {
        return view('allusers.create');
    }

    /**
     * Store a newly created Alluser in storage.
     *
     * @param CreateAlluserRequest $request
     *
     * @return Response
     */
    public function store(CreateAlluserRequest $request)
    {
        $input = $request->all();
        #match the old password
        $request->validate([
            'images' => 'required',
            'images.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf,svg|max:2048',
          ]);
        $request->validate([
            'name' =>'required',
            'email' => 'required', 'email', 'max:255', 'unique:member',
            'password' => 'required', 'string', 'min:8', 'confirmed',
        ]);
        Member::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>\Hash::make($request->password)
        ]);
        
          if($request->hasfile('images')) {
              foreach($request->file('images') as $file)
              {
                    $file_extension = $file->getClientOriginalExtension();
                    $name = time().'.'.$file_extension;
                    $file->move(public_path().'/images/alluser/', $name);  
                    $imgData[] = $name;  
              }
              $input['image'] = json_encode($imgData);
            }

        $alluser = $this->alluserRepository->create($input);
       
        Flash::success('Alluser saved successfully.');

        return redirect(route('allusers.index'));
    }

    /**
     * Display the specified Alluser.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $alluser = $this->alluserRepository->find($id);

        if (empty($alluser)) {
            Flash::error('Alluser not found');

            return redirect(route('allusers.index'));
        }

        return view('allusers.show')->with('alluser', $alluser);
    }

    /**
     * Show the form for editing the specified Alluser.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $alluser = $this->alluserRepository->find($id);

        if (empty($alluser)) {
            Flash::error('Alluser not found');

            return redirect(route('allusers.index'));
        }

        return view('allusers.edit')->with('alluser', $alluser);
    }

    /**
     * Update the specified Alluser in storage.
     *
     * @param int $id
     * @param UpdateAlluserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAlluserRequest $request)
    {
        $alluser = $this->alluserRepository->find($id);
     
        if($request->hasfile('images')) {
            
            $request->validate([
                'images' => 'required',
                'images.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf,svg|max:2048',            
                ]);
               
                 
            foreach(json_decode($alluser->image, true) as $images){
                $image_path = public_path().'/images/alluser'.$images;
                    if(file_exists($image_path)){
                        unlink($image_path);
                    }
                } 

            foreach($request->file('images') as $file)
            {
                $file_extension = $file->getClientOriginalExtension();
                $name = time().'.'.$file_extension;
                $file->move(public_path().'/images/alluser', $name);  
                $imgData[] = $name;  
            }   
            $request['image'] = json_encode($imgData);
            
           
        }

        if (empty($alluser)) {
            Flash::error('Alluser not found');

            return redirect(route('allusers.index'));
        }

        $alluser = $this->alluserRepository->update($request->all(), $id);
       
        Flash::success('Alluser updated successfully.');

        return redirect(route('allusers.index'));
    }

    /**
     * Remove the specified Alluser from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $alluser = $this->alluserRepository->find($id);

        if (empty($alluser)) {
            Flash::error('Alluser not found');

            return redirect(route('allusers.index'));
        }
        foreach(json_decode($alluser->image, true) as $images){
            $image_path = public_path().'/images/alluser'.$images;
                if(file_exists($image_path)){
                    unlink($image_path);
                }
        }



        $this->alluserRepository->delete($id);

        Flash::success('Alluser deleted successfully.');

        return redirect(route('allusers.index'));
    }
}

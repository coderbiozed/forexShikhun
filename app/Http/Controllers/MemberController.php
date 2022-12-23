<?php

namespace App\Http\Controllers;




use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use DB;
use Auth;
use App\Http\Middleware;
use Session;
use App\Models\Member;


class MemberController extends AppBaseController


{
 
    public function index(Request $request)
    {
        $member = $this->memberRepository->all();

        return view('member.index')
            ->with('member', $member);
    }
    

    public function memberLoginForm(){
        $recentblog= DB::table('table_blog')->orderBy('id', 'desc')->paginate(6);
        return view('member.login')
        ->with('recentblog', $recentblog);
    }

 
    public function memberLogin(Request $request){

        $request->validate([
            'email' =>'required',
            'password' =>'required',
        ]);

        if(Auth::guard('member')->attempt(['email' =>$request->email, 'password' =>$request->password])){
            return redirect('member-profile');
        }
        else{
            $request->session()->flash('error-msg', 'Invalid Key or Password');
            return redirect()->back();
        }
    }


    public function memberLogout(){
        Auth::guard('member')->logout();
        return redirect('/');

    }

    
    public function signup(){
        $recentblog= DB::table('table_blog')->orderBy('id', 'desc')->paginate(6);
        return view('frontend.signup')
        ->with('recentblog', $recentblog);
    }

    public function signup_create( Request $request){

        
        // Validator
        $request->validate([
            'name' =>'required',
            'email' => 'required', 'email', 'max:255', 'unique:member',
            'password' => 'required', 'string', 'min:8', 'confirmed',
            'image' => 'nullable', 'mimes:jpeg,jpg,png,gif,csv,txt,pdf,svg|max:2048',
        ]);
       
        // $imagePath = null;


        // if ($request->hasFile('image')) {
        //     $imagePath  = $request->file('image')->storeAs(
        //         'images',
        //         Auth::guard('member')->id() . '.' .$request->file('image')->getClientOriginalExtension(),
        //         'public',
        //     );
        // }

       
        Member::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>\Hash::make($request->password),
            
        ]);
        if(\Auth::guard('member')->attempt($request->only('email','password'))){
            return redirect('member-profile');
        }
       
        // return redirect('frontend.signup')->withError('Error');
        
        return view('frontend.signup')
        ->with('recentblog', $recentblog);
    }  

    
    
}

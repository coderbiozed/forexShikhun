<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Repositories\CourseRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;

use DB;
use Flash;
use Response;

class CourseController extends AppBaseController
{
    /** @var CourseRepository $courseRepository*/
    private $courseRepository;

    public function __construct(CourseRepository $courseRepo)
    {
        $this->courseRepository = $courseRepo;
    }

    /**
     * Display a listing of the Course.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
       
        $courses = $this->courseRepository->all();
        $courses = DB::table('course')->orderBy('id', 'desc')->paginate(4);
      
        return view('courses.index')
            ->with('courses', $courses);
    }

    /**
     * Show the form for creating a new Course.
     *
     * @return Response
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created Course in storage.
     *
     * @param CreateCourseRequest $request
     *
     * @return Response
     */
    public function store(CreateCourseRequest $request)
    {
        $input = $request->all();

        $request->validate([
            'Image' => 'required',
            'Image.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf,svg|max:2048',
            'course_slug' => 'required|unique:course'
          
        ]);

         if($request->hasfile('Image')) {
            foreach($request->file('Image') as $file)
            {
                  $file_extension = $file->getClientOriginalExtension();
                  $name = time().'.'.$file_extension;
                  $file->move(public_path().'/images/courses', $name);  
                  $imgDataCourse[] = $name;  
            }
            $input['image'] = json_encode($imgDataCourse);
        }

        $course = $this->courseRepository->create($input);

        Flash::success('Course saved successfully.');

        return redirect(route('courses.index'));
    }

    /**
     * Display the specified Course.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $course = $this->courseRepository->find($id);

        if (empty($course)) {
            Flash::error('Course not found');

            return redirect(route('courses.index'));
        }

        return view('courses.show')->with('course', $course);
    }

    /**
     * Show the form for editing the specified Course.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $course = $this->courseRepository->find($id);

        if (empty($course)) {
            Flash::error('Course not found');

            return redirect(route('courses.index'));
        }

        return view('courses.edit')->with('course', $course);
    }

    /**
     * Update the specified Course in storage.
     *
     * @param int $id
     * @param UpdateCourseRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCourseRequest $request)
    {
        $course = $this->courseRepository->find($id);

        $request->validate([
            'course_slug' => 'required|unique:course,course_slug,'.$id,
        ]);

        if($request->hasfile('Image')) {
            
            $request->validate([
                'Image' => 'required',
                'Image.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf,svg|max:2048',            
                ]);

            foreach(json_decode($course->image, true) as $images){
                $image_path = public_path().'/images/courses/'.$images;
                    if(file_exists($image_path)){
                        unlink($image_path);
                    }
                } 
            foreach($request->file('Image') as $file)
            {
                $file_extension = $file->getClientOriginalExtension();
                $name = time().'.'.$file_extension;
                $file->move(public_path().'/images/courses', $name);  
                $imgDataCourse[]  = $name;  
            }   
            $request['image'] = json_encode($imgDataCourse);
                  
        }

        if (empty($course)) {
            Flash::error('Course not found');

            return redirect(route('courses.index'));
        }



        $course = $this->courseRepository->update($request->all(), $id);

        Flash::success('Course updated successfully.');

        return redirect(route('courses.index'));
    }

    /**
     * Remove the specified Course from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $course = $this->courseRepository->find($id);

        if (empty($course)) {
            Flash::error('Course not found');

            return redirect(route('courses.index'));
        }
        foreach(json_decode($course->image, true) as $images){
            $image_path = public_path().'/images/courses/'.$images;
                if(file_exists($image_path)){
                    unlink($image_path);
                }
            }

        $this->courseRepository->delete($id);

        Flash::success('Course deleted successfully.');

        return redirect(route('courses.index'));
    }
}

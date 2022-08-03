<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLessonRequest;
use App\Http\Requests\UpdateLessonRequest;
use App\Repositories\LessonRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Lesson;
use DB;
use Flash;
use Response;

class LessonController extends AppBaseController
{
    /** @var LessonRepository $LessonRepository*/
    private $LessonRepository;

    public function __construct(LessonRepository $LessonRepo)
    {
        $this->LessonRepository = $LessonRepo;
    }

    /**
     * Display a listing of the Lesson.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $Lessons = $this->LessonRepository->all();
        $Lessons = DB::table('lessons')->orderBy('id', 'desc')->paginate(8);

        return view('lessons.index')
            ->with('Lessons', $Lessons);
    }

    /**
     * Show the form for creating a new Lesson.
     *
     * @return Response
     */
    public function create()
    {
        $course = Course::pluck('course_title', 'id');
        return view('lessons.create')
        ->with('course', $course);
    }

    /**
     * Store a newly created $Lesson in storage.
     *
     * @param CreateLessonRequest $request
     *
     * @return Response
     */
    public function store(CreateLessonRequest $request)
    {
        $input = $request->all();

       

        $Lesson = $this->LessonRepository->create($input);

        Flash::success('Lesson saved successfully.');

        return redirect(route('Lessons.index'));
    }

    /**
     * Display the specified Lesson.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $Lesson = $this->LessonRepository->find($id);

        if (empty($Lesson)) {
            Flash::error('Lesson not found');

            return redirect(route('Lessons.index'));
        }

        return view('lessons.show')->with('Lesson', $Lesson);
    }

    /**
     * Show the form for editing the specified $Lesson.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $Lesson = $this->LessonRepository->find($id);
        
        $course = Course::pluck('course_title', 'id');
        
        if (empty($Lesson)) {
            Flash::error('Lesson not found');

            return redirect(route('Lessons.index'));
        }

        return view('lessons.edit')->with('Lesson', $Lesson)
        ->with('course', $course);;
    }

    /**
     * Update the specified Lesson in storage.
     *
     * @param int $id
     * @param UpdateLessonRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLessonRequest $request)
    {
        $Lesson = $this->LessonRepository->find($id);

        if (empty($Lesson)) {
            Flash::error('Lesson not found');

            return redirect(route('Lessons.index'));
        }

        $Lesson = $this->LessonRepository->update($request->all(), $id);

        Flash::success('Lesson updated successfully.');

        return redirect(route('Lessons.index'));
    }

    /**
     * Remove the specified Lesson from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $Lesson = $this->LessonRepository->find($id);

        if (empty($Lesson)) {
            Flash::error('Lesson not found');

            return redirect(route('Lessons.index'));
        }

        $this->LessonRepository->delete($id);

        Flash::success('Lesson deleted successfully.');

        return redirect(route('Lessons.index'));
    }


}

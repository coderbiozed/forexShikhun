<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use App\Repositories\ReviewRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Review;
use DB;
use Flash;
use Response;

class ReviewController extends AppBaseController
{
    /** @var ReviewRepository $reviewRepository*/
    private $reviewRepository;

    public function __construct(ReviewRepository $reviewRepo)
    {
        $this->reviewRepository = $reviewRepo;
    }

    /**
     * Display a listing of the Review.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $reviews = $this->reviewRepository->all();

        return view('reviews.index')
            ->with('reviews', $reviews);
    }

    /**
     * Show the form for creating a new Review.
     *
     * @return Response
     */
    public function create()
    {
        $course = Course::pluck('course_title', 'id');
        return view('reviews.create')
        ->with('course', $course);
    }

    /**
     * Store a newly created Review in storage.
     *
     * @param CreateReviewRequest $request
     *
     * @return Response
     */
    public function store(CreateReviewRequest $request)
    {
        $input = $request->all();

        $review = $this->reviewRepository->create($input);

        Flash::success('Review saved successfully.');

        return redirect(route('reviews.index'));
    }

    /**
     * Display the specified Review.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $review = $this->reviewRepository->find($id);

        if (empty($review)) {
            Flash::error('Review not found');

            return redirect(route('reviews.index'));
        }

        return view('reviews.show')->with('review', $review);
    }

    /**
     * Show the form for editing the specified Review.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $review = $this->reviewRepository->find($id);

        $course = Course::pluck('course_title', 'id');

        if (empty($review)) {
            Flash::error('Review not found');

            return redirect(route('reviews.index'));
        }

        return view('reviews.edit')->with('review', $review)
        ->with('course', $course);
    }

    /**
     * Update the specified Review in storage.
     *
     * @param int $id
     * @param UpdateReviewRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateReviewRequest $request)
    {
        $review = $this->reviewRepository->find($id);

        if (empty($review)) {
            Flash::error('Review not found');

            return redirect(route('reviews.index'));
        }

        $review = $this->reviewRepository->update($request->all(), $id);

        Flash::success('Review updated successfully.');

        return redirect(route('reviews.index'));
    }

    /**
     * Remove the specified Review from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $review = $this->reviewRepository->find($id);

        if (empty($review)) {
            Flash::error('Review not found');

            return redirect(route('reviews.index'));
        }

        $this->reviewRepository->delete($id);

        Flash::success('Review deleted successfully.');

        return redirect(route('reviews.index'));
    }
}

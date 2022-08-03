<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVideosRequest;
use App\Http\Requests\UpdateVideosRequest;
use App\Repositories\VideosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class VideosController extends AppBaseController
{
    /** @var VideosRepository $videosRepository*/
    private $videosRepository;

    public function __construct(VideosRepository $videosRepo)
    {
        $this->videosRepository = $videosRepo;
    }

    /**
     * Display a listing of the Videos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $videos = $this->videosRepository->all();
        $videos = $this->videosRepository->paginate(7);

        return view('videos.index')
            ->with('videos', $videos);
    }

    /**
     * Show the form for creating a new Videos.
     *
     * @return Response
     */
    public function create()
    {
        return view('videos.create');
    }

    /**
     * Store a newly created Videos in storage.
     *
     * @param CreateVideosRequest $request
     *
     * @return Response
     */
    public function store(CreateVideosRequest $request)
    {
        $input = $request->all();

        $videos = $this->videosRepository->create($input);

        Flash::success('Videos saved successfully.');

        return redirect(route('videos.index'));
    }

    /**
     * Display the specified Videos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $videos = $this->videosRepository->find($id);

        if (empty($videos)) {
            Flash::error('Videos not found');

            return redirect(route('videos.index'));
        }

        return view('videos.show')->with('videos', $videos);
    }

    /**
     * Show the form for editing the specified Videos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $videos = $this->videosRepository->find($id);

        if (empty($videos)) {
            Flash::error('Videos not found');

            return redirect(route('videos.index'));
        }

        return view('videos.edit')->with('videos', $videos);
    }

    /**
     * Update the specified Videos in storage.
     *
     * @param int $id
     * @param UpdateVideosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVideosRequest $request)
    {
        $videos = $this->videosRepository->find($id);

        if (empty($videos)) {
            Flash::error('Videos not found');

            return redirect(route('videos.index'));
        }

        $videos = $this->videosRepository->update($request->all(), $id);

        Flash::success('Videos updated successfully.');

        return redirect(route('videos.index'));
    }

    /**
     * Remove the specified Videos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $videos = $this->videosRepository->find($id);

        if (empty($videos)) {
            Flash::error('Videos not found');

            return redirect(route('videos.index'));
        }

        $this->videosRepository->delete($id);

        Flash::success('Videos deleted successfully.');

        return redirect(route('videos.index'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFaqcatRequest;
use App\Http\Requests\UpdateFaqcatRequest;
use App\Repositories\FaqcatRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class FaqcatController extends AppBaseController
{
    /** @var FaqcatRepository $faqcatRepository*/
    private $faqcatRepository;

    public function __construct(FaqcatRepository $faqcatRepo)
    {
        $this->faqcatRepository = $faqcatRepo;
    }

    /**
     * Display a listing of the Faqcat.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $faqcats = $this->faqcatRepository->all();

        return view('faqcats.index')
            ->with('faqcats', $faqcats);
    }

    /**
     * Show the form for creating a new Faqcat.
     *
     * @return Response
     */
    public function create()
    {
        return view('faqcats.create');
    }

    /**
     * Store a newly created Faqcat in storage.
     *
     * @param CreateFaqcatRequest $request
     *
     * @return Response
     */
    public function store(CreateFaqcatRequest $request)
    {
        $input = $request->all();

        $faqcat = $this->faqcatRepository->create($input);

        Flash::success('Faqcat saved successfully.');

        return redirect(route('faqcats.index'));
    }

    /**
     * Display the specified Faqcat.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $faqcat = $this->faqcatRepository->find($id);

        if (empty($faqcat)) {
            Flash::error('Faqcat not found');

            return redirect(route('faqcats.index'));
        }

        return view('faqcats.show')->with('faqcat', $faqcat);
    }

    /**
     * Show the form for editing the specified Faqcat.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $faqcat = $this->faqcatRepository->find($id);

        if (empty($faqcat)) {
            Flash::error('Faqcat not found');

            return redirect(route('faqcats.index'));
        }

        return view('faqcats.edit')->with('faqcat', $faqcat);
    }

    /**
     * Update the specified Faqcat in storage.
     *
     * @param int $id
     * @param UpdateFaqcatRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFaqcatRequest $request)
    {
        $faqcat = $this->faqcatRepository->find($id);

        if (empty($faqcat)) {
            Flash::error('Faqcat not found');

            return redirect(route('faqcats.index'));
        }

        $faqcat = $this->faqcatRepository->update($request->all(), $id);

        Flash::success('Faqcat updated successfully.');

        return redirect(route('faqcats.index'));
    }

    /**
     * Remove the specified Faqcat from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $faqcat = $this->faqcatRepository->find($id);

        if (empty($faqcat)) {
            Flash::error('Faqcat not found');

            return redirect(route('faqcats.index'));
        }

        $this->faqcatRepository->delete($id);

        Flash::success('Faqcat deleted successfully.');

        return redirect(route('faqcats.index'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFaqsRequest;
use App\Http\Requests\UpdateFaqsRequest;
use App\Repositories\FaqsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Faqcat;
use App\Models\Faqs;
use Flash;
use Response;

class FaqsController extends AppBaseController
{
    /** @var FaqsRepository $faqsRepository*/
    private $faqsRepository;

    public function __construct(FaqsRepository $faqsRepo)
    {
        $this->faqsRepository = $faqsRepo;
    }

    /**
     * Display a listing of the Faqs.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $faqs = $this->faqsRepository->all();

        return view('faqs.index')
            ->with('faqs', $faqs);
    }

    /**
     * Show the form for creating a new Faqs.
     *
     * @return Response
     */
    public function create()
    {
        $faqs = Faqcat::pluck('category_name', 'id');
        return view('faqs.create')
        ->with('faqs', $faqs);
    }

    /**
     * Store a newly created Faqs in storage.
     *
     * @param CreateFaqsRequest $request
     *
     * @return Response
     */
    public function store(CreateFaqsRequest $request)
    {
        $input = $request->all();

        $faqs = $this->faqsRepository->create($input);
     

        Flash::success('Faqs saved successfully.');

        return redirect(route('faqs.index'));
    }

    /**
     * Display the specified Faqs.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $faqs = $this->faqsRepository->find($id);

        if (empty($faqs)) {
            Flash::error('Faqs not found');

            return redirect(route('faqs.index'));
        }

        return view('faqs.show')->with('faqs', $faqs);
    }

    /**
     * Show the form for editing the specified Faqs.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $faqs = $this->faqsRepository->find($id);

       

        if (empty($faqs)) {
            Flash::error('Faqs not found');

            return redirect(route('faqs.index'));
        }

        return view('faqs.edit')->with('faqs', $faqs);
    }

    /**
     * Update the specified Faqs in storage.
     *
     * @param int $id
     * @param UpdateFaqsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFaqsRequest $request)
    {
        $faqs = $this->faqsRepository->find($id);

        if (empty($faqs)) {
            Flash::error('Faqs not found');

            return redirect(route('faqs.index'));
        }

        $faqs = $this->faqsRepository->update($request->all(), $id);

        Flash::success('Faqs updated successfully.');

        return redirect(route('faqs.index'));
    }

    /**
     * Remove the specified Faqs from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $faqs = $this->faqsRepository->find($id);

        if (empty($faqs)) {
            Flash::error('Faqs not found');

            return redirect(route('faqs.index'));
        }

        $this->faqsRepository->delete($id);

        Flash::success('Faqs deleted successfully.');

        return redirect(route('faqs.index'));
    }
}

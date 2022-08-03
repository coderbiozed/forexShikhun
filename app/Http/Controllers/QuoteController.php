<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateQuoteRequest;
use App\Http\Requests\UpdateQuoteRequest;
use App\Repositories\QuoteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use DB;
use Flash;
use Response;

class QuoteController extends AppBaseController
{
    /** @var QuoteRepository $quoteRepository*/
    private $quoteRepository;

    public function __construct(QuoteRepository $quoteRepo)
    {
        $this->quoteRepository = $quoteRepo;
    }

    /**
     * Display a listing of the Quote.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // $quotes = $this->quoteRepository->all();
        $quotes= DB::table('quote')->orderBy('id', 'desc')->paginate(7);

        return view('quotes.index')
            ->with('quotes', $quotes);
    }

    /**
     * Show the form for creating a new Quote.
     *
     * @return Response
     */
    public function create()
    {
        return view('quotes.create');
    }

    /**
     * Store a newly created Quote in storage.
     *
     * @param CreateQuoteRequest $request
     *
     * @return Response
     */
    public function store(CreateQuoteRequest $request)
    {
        $input = $request->all();

        $quote = $this->quoteRepository->create($input);

        Flash::success('Quote saved successfully.');

        return redirect(route('quotes.index'));
    }

    /**
     * Display the specified Quote.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $quote = $this->quoteRepository->find($id);

        if (empty($quote)) {
            Flash::error('Quote not found');

            return redirect(route('quotes.index'));
        }

        return view('quotes.show')->with('quote', $quote);
    }

    /**
     * Show the form for editing the specified Quote.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $quote = $this->quoteRepository->find($id);

        if (empty($quote)) {
            Flash::error('Quote not found');

            return redirect(route('quotes.index'));
        }

        return view('quotes.edit')->with('quote', $quote);
    }

    /**
     * Update the specified Quote in storage.
     *
     * @param int $id
     * @param UpdateQuoteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateQuoteRequest $request)
    {
        $quote = $this->quoteRepository->find($id);

        if (empty($quote)) {
            Flash::error('Quote not found');

            return redirect(route('quotes.index'));
        }

        $quote = $this->quoteRepository->update($request->all(), $id);

        Flash::success('Quote updated successfully.');

        return redirect(route('quotes.index'));
    }

    /**
     * Remove the specified Quote from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $quote = $this->quoteRepository->find($id);

        if (empty($quote)) {
            Flash::error('Quote not found');

            return redirect(route('quotes.index'));
        }

        $this->quoteRepository->delete($id);

        Flash::success('Quote deleted successfully.');

        return redirect(route('quotes.index'));
    }
}

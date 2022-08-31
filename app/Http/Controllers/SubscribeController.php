<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSubscribeRequest;
use App\Http\Requests\UpdateSubscribeRequest;
use App\Repositories\SubscribeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;

use DB;
use Flash;
use Response;

class SubscribeController extends AppBaseController
{
    /** @var SubscribeRepository $subscribeRepository*/
    private $subscribeRepository;

    public function __construct(SubscribeRepository $subscribeRepo)
    {
        $this->subscribeRepository = $subscribeRepo;
    }

    /**
     * Display a listing of the Subscribe.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // $subscribes = $this->subscribeRepository->paginate(9);
        $subscribes= DB::table('subscribe')->orderBy('id', 'desc')->paginate(9);
      
        return view('subscribes.index')
            ->with('subscribes', $subscribes);
    }

    /**
     * Show the form for creating a new Subscribe.
     *
     * @return Response
     */

    public function create()
    {
        return view('subscribes.create');
        
    }

    /**
     * Store a newly created Subscribe in storage.
     *
     * @param CreateSubscribeRequest $request
     *
     * @return Response
     */
    public function store(CreateSubscribeRequest $request)
    {
        $input = $request->all();

        $subscribe = $this->subscribeRepository->create($input);

        Flash::success('<h4> Subscribe saved successfully.</h4>');

        return redirect()->back();
    }

    /**
     * Display the specified Subscribe.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $subscribe = $this->subscribeRepository->find($id);

        if (empty($subscribe)) {
            Flash::error('Subscribe not found');

            return redirect(route('subscribes.index'));
        }

        return view('subscribes.show')->with('subscribe', $subscribe);
    }

    /**
     * Show the form for editing the specified Subscribe.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $subscribe = $this->subscribeRepository->find($id);

        if (empty($subscribe)) {
            Flash::error('Subscribe not found');

            return redirect(route('subscribes.index'));
        }

        return view('subscribes.edit')->with('subscribe', $subscribe);
    }

    /**
     * Update the specified Subscribe in storage.
     *
     * @param int $id
     * @param UpdateSubscribeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSubscribeRequest $request)
    {
        $subscribe = $this->subscribeRepository->find($id);

        if (empty($subscribe)) {
            Flash::error('Subscribe not found');

            return redirect(route('subscribes.index'));
        }

        $subscribe = $this->subscribeRepository->update($request->all(), $id);

        Flash::success('Subscribe updated successfully.');

        return redirect(route('subscribes.index'));
    }

    /**
     * Remove the specified Subscribe from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $subscribe = $this->subscribeRepository->find($id);

        if (empty($subscribe)) {
            Flash::error('Subscribe not found');

            return redirect(route('subscribes.index'));
        }

        $this->subscribeRepository->delete($id);

        Flash::success('Subscribe deleted successfully.');

        return redirect(route('subscribes.index'));
    }
}

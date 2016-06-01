<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Services\CustomerService;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

use App\Http\Requests;

class CustomerController extends Controller
{
    /**
     * @var CustomerRepository
     */
    private $service;

    public function __construct(CustomerService $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     * @internal param CustomerRepository $repository
     */
    public function index()
    {
        $customers = $this->service->index();

        return view('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CustomerRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerRequest $request)
    {
        $customer = $this->service->store($request->all());

        return redirect()->route('customers.show', [$customer->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $customer = $this->service->show($id);

            return view('customers.show', compact('customer'));
        } catch (ModelNotFoundException $e) {
            return response()->view('errors.custom', [], 404);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = $this->service->edit($id);

        return view('customers.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CustomerRequest|Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerRequest $request, $id)
    {
        $this->service->update($request->all(), $id);

        return redirect()->route('customers.show', [$id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->service->destroy($id);

        return redirect()->route('customers.index');
    }
}

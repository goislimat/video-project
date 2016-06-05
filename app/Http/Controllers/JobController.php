<?php

namespace App\Http\Controllers;

use App\Repositories\JobRepository;
use App\Repositories\SchoolTransportRepository;
use Illuminate\Http\Request;

use App\Http\Requests;

class JobController extends Controller
{
    /**
     * @var JobRepository
     */
    private $repository;
    /**
     * @var SchoolTransportRepository
     */
    private $schoolTransportRepository;

    /**
     * JobController constructor.
     * @param JobRepository $repository
     * @param SchoolTransportRepository $schoolTransportRepository
     */
    public function __construct(JobRepository $repository, SchoolTransportRepository $schoolTransportRepository)
    {
        $this->repository = $repository;
        $this->schoolTransportRepository = $schoolTransportRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = $this->repository->all();
        
        return view('jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $job = $this->repository->create($data);
        $data['job_id'] = $job->id;

        //dd($data);

        $this->schoolTransportRepository->create($data);

        return redirect()->route('jobs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

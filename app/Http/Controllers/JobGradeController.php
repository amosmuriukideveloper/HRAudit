<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJobGradeRequest;
use App\Http\Requests\UpdateJobGradeRequest;
use App\Models\JobGrade;
use Illuminate\Http\Request;

class JobGradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobGrade = JobGrade::all();
        return view('jobGrade.index', compact('jobGrade'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobGrade.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateJobGradeRequest $request)
    {
        JobGrade::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(JobGrade $jobGrade)
    {
        return view('jobGrade.show',compact('jobGrade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(JobGrade $jobGrade)
    {
        return view('jobGrade.edit',compact('jobGrade'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobGradeRequest $request, JobGrade $jobGrade)
    {
        $jobGrade->update($request->all());
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobGrade $jobGrade)
    {
        $jobGrade->delete();
    }
}

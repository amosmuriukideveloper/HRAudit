<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJobGradeRequest;
use App\Http\Requests\UpdateJobGradeRequest;
use App\Models\JobGrade;

class JobGradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobGrades = JobGrade::all();
        return view('jobgrade.index', compact('jobGrades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jobGrades = JobGrade::get();
        return view('jobgrade.index', compact('jobGrades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateJobGradeRequest $request)
    {
        $request->validated();
        $jobGrade = JobGrade::create([
            'name' => $request->name,
        ]);

        return redirect()->route('job.grade.index')
            ->withSuccess(__('Job Grade created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(JobGrade $jobGrade)
    {
        // return view('jobGrade.show',compact('jobGrade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(JobGrade $id)
    {
        $jobGrade = JobGrade::findOrFail($id);
        return view('jobgrade.edit',compact('jobGrade'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobGradeRequest $request, $id)
    {
        $validated = $request->validated();
        $jobGrade = JobGrade::findOrFail($id);


        $jobGrade->update($validated);

        return redirect()->route('job.grade.index')
            ->withSuccess(__('Job Grade updated successfully.'));
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $jobGrade = JobGrade::find($id);
        
        if ($jobGrade->delete()) {
            return redirect()->route('job.grade.index')
            ->withSuccess(__('Job Grade deleted successfully.'));
        }
        
       
    }
}

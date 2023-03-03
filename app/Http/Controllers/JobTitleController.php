<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJobTitleRequest;
use App\Http\Requests\UpdateJobTitleRequest;
use App\Models\JobTitle;

class JobTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobTitles = JobTitle::all();
        return view('jobtitle.index', compact('jobTitles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jobTitles = JobTitle::all();
        return view('jobtitle.index', compact('jobTitles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateJobTitleRequest $request)
    {
        $request->validated();
        $jobTitle = new JobTitle ([
            'name' => $request->name,
            
        ]);
        $jobTitle->save();

        return redirect()->route('job.title.index')
            ->withSuccess(__('Job Title created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // return view('jobTitle.show',compact('jobTitle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jobTitle = JobTitle::findOrFail($id);

        return view('jobtitle.edit',compact('jobTitle'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobTitleRequest $request, $id)
    {
        $validated = $request->validated();
        $jobTitle = JobTitle::findOrFail($id);


        $jobTitle->update($validated);
        return redirect()->route('job.title.index')
            ->withSuccess(__('Job Title updated successfully.'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jobTitle = JobTitle::find($id);
        
        if ($jobTitle->delete()) {
            return redirect()->route('job.grade.index')
            ->withSuccess(__('Job Grade deleted successfully.'));
        }
    }
}

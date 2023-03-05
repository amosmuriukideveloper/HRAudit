<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmploymentChangeRequest;
use App\Http\Requests\UpdateEmploymentChangeRequest;
use App\Models\Certificate;
use App\Models\ChangeType;
use App\Models\Course;
use App\Models\Department;
use App\Models\EmploymentChange;
use App\Models\Institution;
use App\Models\JobTitle;
use App\Models\Relationship;

class EmploymentChangeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $changes = EmploymentChange::get();


        return view('employment.change.index', compact('changes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id=null)

    {
        $id = $id;
        $jobTitles = JobTitle::all();
        $departments = Department::all();
        $relationships = Relationship::all();
        $institutions = Institution::all();
        $certificates = Certificate::all();
        $courses = Course::all();
        return view('forms.third', compact ('jobTitles', 'departments', 'courses', 'relationships', 'institutions', 'certificates', 'id' ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEmploymentChangeRequest $request, $id)

    {


        $request->validated();
        // dd($request->validated());
        $employmentchange = EmploymentChange::create([
            'personal_detail_id' => $id,
            'relative_id' => $request->relative_id,
            'name' =>$request->name,
            'id_no' =>$request->id_no,
            'job_title_id' => $request->job_title_,
            'relationship' => $request->relationship,
            'department_id' => $request->department_id,
            'study_leave' => $request->study_leave,
            'start_date' => $request->start_date.'-01',
            'end_date' => $request->end_date.'-01',
            'institution' => $request->institution,
            'course' => $request->course,
            'certificate' => $request->certificate,
            'date' => $request ->date.'-01',
            'approving_signatory' => $request ->approving_signatory,
            // 'coments' => $request->comments,
        ]);



        return redirect()->route('payslip.next', $id)->with('success', 'Employment Changes/Movements have been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employmentchange = EmploymentChange::findOrFail($id);

        return view('employment.changes.show', compact('change'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employmentchange = EmploymentChange::findOrFail($id);
        $jobTitles = JobTitle::findOrFail($id);
        $departments = Department::findOrFail($id);
        $relationships = Relationship::findOrFail($id);
        $institutions = Institution::findOrFail($id);
        $certificates = Certificate::findOrFail($id);
        $courses = Certificate::findOrFail($id);


        return view('biodata.edit', compact('change', 'jobTitles', 'departments', 'relationships', 'institutions', 'certificates',  'courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmploymentChangeRequest $request, $id)
    {
        $validated = $request->validated();
        $employmentchange = EmploymentChange::findOrFail($id);


        $employmentchange->update($validated);
        return redirect()->route('personal.details.edit')
                        ->with('success','Employment Details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $change = EmploymentChange::findOrFail($id);

        $change->delete();
    }
}

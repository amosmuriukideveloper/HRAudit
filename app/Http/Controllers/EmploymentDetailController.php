<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmploymentDetailRequest;
use App\Http\Requests\UpdateEmploymentDetailRequest;
use App\Models\Certificate;
use App\Models\Department;
use App\Models\EmployeeWorkExperience;
use App\Models\EmploymentDetail;
use App\Models\EmploymentTerm;
use App\Models\JobGrade;
use App\Models\PersonalDetail;
use App\Models\Position;
use App\Models\ProbationStatus;

class EmploymentDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::get();
        $employmentTerms = EmploymentTerm::all();
        $probations = ProbationStatus::all();
        $employmentDetails = EmploymentDetail::all();
        $positions = Position::all();
        $jobGrades = JobGrade::all();
        return view('forms.second', compact('employmentDetails', 'employmentTerms', 'departments', 'probations', 'positions', 'jobGrades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id=null)
    {

        $id = $id;
        $departments = Department::all();
        $probations = ProbationStatus::all();
        $positions = Position::all();
        $jobGrades = JobGrade::all();
        $employmentTerms = EmploymentTerm::all();

        $employmentDetails = EmploymentDetail::all();

        return view('forms.second', compact('employmentDetails', 'departments', 'employmentTerms', 'probations', 'positions', 'jobGrades', 'id'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEmploymentDetailRequest $request, $id)
    {
        // $departments = Department::get();

        $request->validated();
        $positions = $request->position;
        //  dd($request->validated());

        $employmentDetail = EmploymentDetail::create([
            'personal_detail_id' => $id,
            'department_id' => $request->department_id,
            'appointment_letter' => $request->appointment_letter,
            'employment_term_id' => $request->employment_term_id,
            'probation_statuses_id' => $request->probation_statuses_id,
            'comments' => $request->comments,

        ]);


            foreach($positions as $key => $position) {

                 EmployeeWorkExperience::create([
                    'personal_detail_id' => $id,
                    'position'=>$position,
                    'job_grade_id'=>$request->job_grade_id[$key],
                    'employment_year' => date('Y-m-d', strtotime($request->employment_year[$key])),

                ]);




    }

        return redirect()->route('employee.certificate.next', $id)->with('success', 'Employment Details have been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employmentDetail = EmploymentDetail::find($id);
        return view('employmentDetails.show', compact('employmentDetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employmentDetail = EmploymentDetail::findOrFail($id);
        $personalDetail = PersonalDetail::findOrFail($id);
        $probations = ProbationStatus::findOrFail($id);
        $jobGrades = JobGrade::findOrFail($id);
        $employmentTerms = EmploymentTerm::findOrFail($id);
        $departments = Department::findOrFail($id);
        $positions = Position::findOrFail($id);


        return view('biodata.edit', compact('employmentDetail', 'personalDetail', 'probations', 'jobGrades', 'departments', 'employmentTerms', 'positions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmploymentDetailRequest $request, $id)
    {
       $validated = $request->validated();
       $employeeDetail =  EmploymentDetail::where('id','=',$id)->firstOrFail();


    $employeeDetail->update($validated);
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
        $employeeDetail = EmploymentDetail::findOrFail($id);

        $employeeDetail->delete();
    }


}

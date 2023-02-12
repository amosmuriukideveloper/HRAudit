<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmploymentDetailRequest;
use App\Http\Requests\UpdateEmploymentDetailRequest;
use App\Models\EmploymentDetail;


class EmploymentDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employmentDetails = EmploymentDetail::all();
        return view('employmentDetails.index', compact('employmentDetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employmentDetails.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEmploymentDetailRequest $request)
    {
        $request->validated();
        
        $employeeDetail = new EmploymentDetail([
            'personal_detail_id' => 'required|integer',
            'appointment_letter' => 'required|boolean',
            'employment_term_id' => 'required|integer',
            'date_of_employment' => 'required|date',
            'probation_status_id' => 'required|integer',
            'position_id' => 'required|integer',
            'job_grade_id' => 'required|integer',
        ]);

       

        
        $employeeDetail->save();

        return redirect('employmentDetails')->with('success', 'Employment Details have been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employeeDetail = EmploymentDetail::find($id);
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
        $employeeDetail = EmploymentDetail::findOrFail($id);

        return view('employmentDetail.edit', compact('employmentDetail'));
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

       $employeeDetail = new EmploymentDetail([
        'personal_detail_id' => $request->get('personal_detail_id'),
        'appointment_letter' => $request->get('appointment_letter'),
        'employment_term_id' => $request->get('employment_term_id'),
        'date_of_employment' => $request->get('date_of_employment'),
        'probation_status_id' => $request->get('probation_status_id'),
        'position_id' => $request->get('position_id'),
        'job_grade_id' => $request->get('job_grade_id'),
    ]);

    $employeeDetail->update();
       return redirect()->route('employmentDetails.index')
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

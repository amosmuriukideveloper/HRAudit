<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePersonalDetailRequest;
use App\Http\Requests\UpdatePersonalDetailRequest;
use App\Models\PersonalDetail;
use App\Models\Relationship;

class PersonalDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personalDetails = PersonalDetail::all();
        return view('personalDetails.index', compact('personalDetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personalDetails.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePersonalDetailRequest $request)
    {
        $request->validated();
        $personalDetail = new PersonalDetail;
        $personalDetail->name = $request->name;
        $personalDetail->payroll_number = $request->payroll_number;
        $personalDetail->id_no = $request->id_no;
        $personalDetail->age = $request->age;
        $personalDetail->gender = $request->gender;
        $personalDetail->disability_status_id = $request->disability_status_id;
        $personalDetail->passport_photo = $request->passport_photo;
        $personalDetail->tel_mobile = $request->tel_mobile;
        $personalDetail->ethnicity_id = $request->ethnicity_id;
        $personalDetail->save();

        return redirect()->route('personalDetails.index')->with('success', 'Personal Details added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
                $personalDetail = PersonalDetail::where('id','=',$id)->firstOrFail();

        return view('personalDetails.show', compact('personalDetail'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $personalDetail = PersonalDetail::where('id','=',$id)->firstOrFail();
       
           return view('personalDetails.edit', compact('personalDetail'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePersonalDetailRequest $request, $id)
    {
        $validated = $request->validated();
        $personalDetail =  PersonalDetail::where('id','=',$id)->firstOrFail();
       

        $data = [
        $personalDetail->name = $request->name,
        $personalDetail->payroll_number = $request->payroll_number,
        $personalDetail->id_no = $request->id_no,
        $personalDetail->age = $request->age,
        $personalDetail->gender = $request->gender,
        $personalDetail->disability_status_id = $request->disability_status_id,
        $personalDetail->passport_photo = $request->passport_photo,
        $personalDetail->tel_mobile = $request->tel_mobile,
        $personalDetail->ethnicity_id = $request->ethnicity_id,

        ];

        $personalDetail->update($data);
        return redirect()->route('personalDetail.index')
                         ->with('success','Personal Details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonalDetail $personalDetail)
    {
        $personalDetail->delete();

        return redirect()->route('personalDetail.index')
                        ->with('success','PersonalDetails deleted successfully');
    }
}

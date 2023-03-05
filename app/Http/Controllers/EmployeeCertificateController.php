<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmployeeCertificateRequest;
use App\Http\Requests\UpdateEmployeeCertificateRequest;
use App\Models\Certificate;
use App\Models\EmployeeCertificate;
use App\Models\OtherCertificate;
use App\Models\ProfessionalCertificate;

class EmployeeCertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employeeCertificates = EmployeeCertificate::all();
        return view('forms.cert', compact('employeeCertificate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id=null)
    {
       $id = $id;
       $employeeCertificates = EmployeeCertificate::all();
        return view('forms.cert', compact('employeeCertificates', 'id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEmployeeCertificateRequest $request, $id)
    {


        $request->validated();
        $certificates = $request->name;
        $other_certificates = $request->cert_title;
        $professional_certificates = $request->membership_number;

    //    dd($request->validated());
        foreach($certificates as $key => $certificate) {

           EmployeeCertificate::create([
                'personal_detail_id' => $id,
                'name' =>$certificate,
                'index_number' =>$request->index_number[$key],
                'school' =>$request->school[$key],
                'certificate_number' =>$request->certificate_number[$key],
                'comments' => $request->comments
            ]);
        }


        
            foreach($other_certificates as $key => $certificate) {

                OtherCertificate::create([
                    'personal_detail_id' => $id,
                    'cert_title' => $certificate,
                    'course' => $request->course[$key],
                    'cert_year' => $request->cert_year[$key],
                    'cert_number' => $request->cert_number[$key],
                    
                ]);
                
    }

    foreach($professional_certificates as $key => $membership) {
        ProfessionalCertificate::create([
            'personal_detail_id' => $id,
            'professional_body' => $request->professional_body[$key],
            'membership_number' => $request->membership_number[$key],
            'license_number' => $request->license_number[$key],
            'cert_year' => $request->cert_year[$key],
            'membership_status' => $request->membership_status[$key]
        ]);
    }
    


    
    return redirect()->route('employment.change.next', $id)->with('success', 'Employee Certificate Details have been added');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(EmployeeCertificate $employeeCertificate)
    {
        // return view('employeeCertificate.show', compact('employeeCertificate'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employeeCertificate = EmployeeCertificate::findOrFail($id);

        return view('biodata.edit', compact('employeeCertificate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmployeeCertificateRequest $request, $id)
    {
        $validated = $request->validated();
        $employeeCertificate =  EmployeeCertificate::where('id','=',$id)->firstOrFail();
        $employeeCertificate->update($validated);

        return redirect()->route('personal.details.edit')
                        ->with('success','Employee Certifixate Details updated successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employeeCertificate = EmployeeCertificate::findOrFail($id);
        $employeeCertificate->delete();
    }
}

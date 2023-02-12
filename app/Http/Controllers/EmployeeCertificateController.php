<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmployeeCertificateRequest;
use App\Http\Requests\UpdateEmployeeCertificateRequest;
use App\Models\Certificate;
use App\Models\EmployeeCertificate;

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
        return view('employeeCertificate.index', compact('employeeCertificate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employeeCertificate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEmployeeCertificateRequest $request)
    {
        $request->validated();
        
        $employeeCertificate = new Certificate([
            'employee_id' => 'required|integer',
            'certificates_id' => 'required|integer',
        ]);

        $employeeCertificate->save();

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(EmployeeCertificate $employeeCertificate)
    {
        return view('employeeCertificate.show', compact('employeeCertificate'));

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

        return view('employeeCertificate.edit', compact('employeeCertificate'));
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
        $employeeCertificate = new EmployeeCertificate([
            'employee_id' => 'required|integer',
            'certificates_id' => 'required|integer',
        ]);

        $employeeCertificate->update();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmployeeCertificate $employeeCertificate)
    {
        $employeeCertificate->delete();
    }
}

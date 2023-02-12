<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmploymentTermRequest;
use App\Http\Requests\UpdateEmploymentTermRequest;
use App\Models\EmploymentTerm;
use Illuminate\Http\Request;

class EmploymentTermController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employmentTerms = EmploymentTerm::all();

        return view('employmentTerms.index', compact('employmentTerms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employmentTerms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEmploymentTermRequest $request)
    {
        $employmentTerm = EmploymentTerm::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('employmentTerms.show', compact('employmentTerm'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(EmploymentTerm $employmentTerm)
    {
        return view('employmentTerms.edit', compact('employmentTerm'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmploymentTermRequest $request, EmploymentTerm $employmentTerm)
    {
        $employmentTerm->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmploymentTerm $employmentTerm)
    {
        $employmentTerm->delete();
    }
}

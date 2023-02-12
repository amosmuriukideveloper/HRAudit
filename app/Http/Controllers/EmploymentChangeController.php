<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmploymentChangeRequest;
use App\Http\Requests\UpdateEmploymentChangeRequest;
use App\Models\EmploymentChange;


class EmploymentChangeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $changes = EmploymentChange::all();

        return view('employee_changes.index', compact('changes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employment_changes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEmploymentChangeRequest $request)
    {
        $change = EmploymentChange::create($request->validated());

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $change = EmploymentChange::findOrFail($id);

        return view('employment_changes.show', compact('change'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $change = EmploymentChange::findOrFail($id);

        return view('employee_changes.edit', compact('change'));
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
        $change = EmploymentChange::findOrFail($id);

        $change->update($request->validated());
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

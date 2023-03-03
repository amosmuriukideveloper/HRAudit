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

        return view('employmentterm.index', compact('employmentTerms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employmentTerms = EmploymentTerm::get();
        return view('employmentterm.index', compact('employmentTerms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEmploymentTermRequest $request)
    {
        $request->validated();
        $employmentTerm = EmploymentTerm::create([
            'name' => $request->name,
           
        ]);

        return redirect()->route('employment.term.index')
            ->withSuccess(__('Employment Term created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return view('employmentTerms.show', compact('employmentTerm'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(EmploymentTerm $employmentTerm, $id)
    {
        $employmentTerm = EmploymentTerm::findOrFail($id);
        return view('employmentterm.edit', compact('employmentTerm'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmploymentTermRequest $request, $id)
    {
        $validated = $request->validated();
        $employmentTerm = EmploymentTerm::findOrFail($id);


        $employmentTerm->update($validated);


        return redirect()->route('employment.term.index')
            ->withSuccess(__('Employment Term updated successfully.'));
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
        return redirect()->route('employment.term.index')
        ->withSuccess(__('Employment term record deleted successfully.'));
    }
}

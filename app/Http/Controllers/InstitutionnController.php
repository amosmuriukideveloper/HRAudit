<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInstitutionRequest;
use App\Http\Requests\UpdateInstitutionRequest;
use App\Models\Institution;
use Illuminate\Http\Request;

class InstitutionnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $institutions = Institution::all();
        return view('institution.index', compact('institutions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $institutions = Institution::get();
        return view('institution.index', compact('institutions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateInstitutionRequest $request)
    {
        $request->validated();
        $institution = Institution::create([
            'name' => $request->name,
            'address' => $request->address,
        ]);
        $institution->save();
        return redirect()->route('institution.index')
            ->withSuccess(__('Institution created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $institution = Institution::findOrFail($id);
        return view('institution.edit',compact('institution'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInstitutionRequest $request, $id)
    {
        $validated = $request->validated();
        $institution = Institution::findOrFail($id);


        $institution->update($validated);

        return redirect()->route('institution.index')
            ->withSuccess(__('Institution updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Institution $institution)
    {
        $institution->delete();
        return redirect()->route('institution.index')
        ->withSuccess(__('Institution record deleted successfully.'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDisabilityRequest;
use App\Http\Requests\UpdateDisabilityRequest;
use App\Models\DisabilityStatus;


class DisabilityStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $disabilityStatuses = DisabilityStatus::all();
        return view('disability.index', compact('disabilityStatuses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $disabilityStatuses = DisabilityStatus::all();
        return view('disability.index', compact('disabilityStatuses'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateDisabilityRequest $request)
    {
       
        $validatedData = $request->validate([
            
            'name' => 'required|string|max:255',
        ]);

        $disabilityStatus = DisabilityStatus::create($validatedData);
        return redirect()->route('disability.status.index')
        ->withSuccess(__('Disability created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $disabilityStatus = DisabilityStatus::findOrFail($id);
        // return view('disability_status.show', compact('disabilityStatus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $disabilityStatus = DisabilityStatus::findOrFail($id);
        return view('disability.edit', compact('disabilityStatus'));

        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDisabilityRequest $request, $disabilityStatus)
    {
        
        $request->validated();
        $disabilityStatus = DisabilityStatus::findOrFail($disabilityStatus);


        $disabilityStatus->update([
            'name' => $request->name,
            
        ]);

        return redirect()->route('disability.status.index')
            ->withSuccess(__('Disability Status updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DisabilityStatus $disabilityStatus, $id)
    {
        $disabilityStatus = DisabilityStatus::findOrFail($id);
        $disabilityStatus->delete();
        return redirect()->route('disability.status.index')
        ->with('success','Disability Status deleted successfully');
    }
}

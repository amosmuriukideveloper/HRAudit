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
        $disabilityStatus = DisabilityStatus::all();
        return view('disability_statuses.index', compact('disabilityStatus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('disability_status.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateDisabilityRequest $request)
    {
        $request->validated();

        DisabilityStatus::create($request->all());
        return redirect()->route('disability_status.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $disabilityStatus = DisabilityStatus::findOrFail($id);
        return view('disability_status.show', compact('disabilityStatus'));
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
        return view('disability_status.edit', compact('disabilityStatus'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDisabilityRequest $request, $id)
    {
        
        $validated = $request->validated();
        $disabilityStatus = DisabilityStatus::findOrFail($id);
        $disabilityStatus->update($request->all());
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
    }
}

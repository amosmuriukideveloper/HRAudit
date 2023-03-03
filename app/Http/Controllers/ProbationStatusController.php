<?php

namespace App\Http\Controllers;

use App\Models\ProbationStatus;
use Illuminate\Http\Request;

class ProbationStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $probations = ProbationStatus::all();
        return view('probation.index', compact('probations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $probations = ProbationStatus::all();
        return view('probation.index', compact('probations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $probation = ProbationStatus::create([
            'name' => $request->name,
        ]);

        return redirect()->route('probation.status.index')
        ->withSuccess(__('Probation Status created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProbationStatus  $probationStatus
     * @return \Illuminate\Http\Response
     */
    public function show(ProbationStatus $id)
    {
        $probation = ProbationStatus::findOrFail($id);
        return view('probation.status.show', compact('probation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProbationStatus  $probationStatus
     * @return \Illuminate\Http\Response
     */
    public function edit(ProbationStatus $id)
    {
        $probation = ProbationStatus::findOrFail($id);
        return view('probation.edit', compact('probation')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProbationStatus  $probationStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validated();
        $probation = ProbationStatus::findOrFail($id);


        $probation->update($validated);

        return redirect()->route('probation.status.index')
            ->withSuccess(__('Probation Status updated successfully.'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProbationStatus  $probationStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProbationStatus $id)
    {
        $probation = ProbationStatus::findOrFail($id);
        if ($probation->delete()) {
            return redirect()->route('probation.status.index')
            ->withSuccess(__('Job Grade deleted successfully.'));
        }
    }
}

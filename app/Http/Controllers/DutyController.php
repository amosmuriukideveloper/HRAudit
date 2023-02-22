<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDutyRequest;
use App\Http\Requests\UpdateDutyRequest;
use App\Models\Duty;


class DutyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $duties = Duty::all();

        return view('duty.index', compact('duty'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $duties = Duty::all();

        return view('duty.index', compact('duties'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateDutyRequest $request)
    {
        $validatedData = $request->validate([
            
            'duty_name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        $duty = Duty::create($validatedData);

        return redirect()->route('duty.index')
        ->withSuccess(__('Duty added successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Duty $duty)
    {
        return view('duties.show', compact('duty'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Duty $duty)
    {
        return view('duty.edit', compact('duty'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDutyRequest $request, Duty $duty)
    {
        
        $validatedData = $request->validate([
            
            'duty_name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        $duty->update($validatedData);
        return redirect()->route('duty.index')
        ->withSuccess(__('Duty updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Duty $duty)
    {
        $duty->delete();
    }
}

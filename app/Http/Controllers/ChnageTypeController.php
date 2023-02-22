<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateChangeTypeRequest;
use App\Http\Requests\UpdateChangeTypeRequest;
use App\Models\ChangeType;
use Illuminate\Http\Request;

class ChnageTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $changeTypes = ChangeType::get();

        return view('changetype.index', compact('changeTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $changeTypes = ChangeType::get();

        return view('changetype.index', compact('changeTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateChangeTypeRequest $request)
    {
        $validatedData = $request->validate([
            
            'name' => 'required|string|max:255',
        ]);

        $changeType = ChangeType::create($validatedData);
        return redirect()->route('change.type.index')
        ->withSuccess(__('Change Type created successfully.'));

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
        $changeType = ChangeType::findOrFail($id);

        return view('changetype.edit', compact('changeType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChangeTypeRequest $request, $id)
    {
        $validated = $request->validated();
        $changeType =  ChangeType::where('id','=',$id)->firstOrFail();


       

        $changeType->update($validated);

        return redirect()->route('change.type.index')
            ->withSuccess(__('Change type updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChangeType $changeType)
    {
        $changeType->delete();
        return redirect()->route('change.type.index')->with('success', 'Department deleted successfully');
    }
}

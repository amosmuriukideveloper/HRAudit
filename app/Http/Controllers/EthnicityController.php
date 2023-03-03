<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEthnicityRequest;
use App\Http\Requests\UpdateEthnicityRequest;
use App\Models\Ethnicity;

class EthnicityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ethnicities = Ethnicity::all();
        return view('ethnicity.index', compact('ethnicities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ethnicities = Ethnicity::get();
        return view('ethnicity.index', compact('ethnicities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEthnicityRequest $request)
    {
        $request->validated();
        $ethnicity = Ethnicity::create([
            'name' => $request->name,
        ]);

        return redirect()->route('ethnicity.index')
            ->withSuccess(__('Ethnicity created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ethnicity $ethnicity)
    {
        // return view('ethnicity.show',compact('ethnicity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ethnicity = Ethnicity::findOrFail($id);
        return view('ethnicity.edit',compact('ethnicity'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEthnicityRequest $request, $id)
    {
        $validated = $request->validated();
        $ethnicity = Ethnicity::findOrFail($id);


        $ethnicity->update($validated);

        return redirect()->route('ethnicity.index')
            ->withSuccess(__('Ethnicity updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ethnicity $ethnicity)
    {
        // dd($ethnicity);
        $ethnicity->delete();
        return redirect()->route('department.index')
        ->withSuccess(__('Ethnicity record deleted successfully.'));
    }
}

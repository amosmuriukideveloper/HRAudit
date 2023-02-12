<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEthnicityRequest;
use App\Http\Requests\UpdateEthnicityRequest;
use App\Models\Ethnicity;
use Illuminate\Http\Request;

class EthnicityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ethnicity = Ethnicity::all();
        return view('ethnicity.index', compact('ethnicity'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ethnicity.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEthnicityRequest $request)
    {
        Ethnicity::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ethnicity $ethnicity)
    {
        return view('ethnicity.show',compact('ethnicity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ethnicity $ethnicity)
    {
        return view('ethnicity.edit',compact('ethnicity'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEthnicityRequest $request, Ethnicity $ethnicity)
    {
        $ethnicity->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ethnicity $ethnicity)
    {
        $ethnicity->delete();
    }
}

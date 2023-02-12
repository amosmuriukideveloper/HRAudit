<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRelationRequest;
use App\Http\Requests\UpdateRelationRequest;
use App\Models\Relation;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $relations = Relation::all();
        return view('relations.index', compact('relations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('relations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRelationRequest $request)
    {
        $request->validated();
        
        $relation = new Relation([
            'name' => $request->get('name'),
            'job_title_id' => $request->get('job_title_id'),
            'relationships_id' => $request->get('relationships_id'),
            'department_id' => $request->get('department_id'),
        ]);

        $relation->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $relation = Relation::find($id);
        return view('relations.show', compact('relation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $relation = Relation::findOrFail($id);

        return view('relations.edit', compact('relation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRelationRequest $request, $id)
    {
        $validated = $request->validated();
        $relation =  Relation::where('id','=',$id)->firstOrFail();

        $relation->name = $request->get('name');
        $relation->job_title_id = $request->get('job_title_id');
        $relation->relationships_id = $request->get('relationships_id');
        $relation->department_id = $request->get('department_id');

        $relation->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $relation =  Relation::where('id','=',$id)->firstOrFail();
        $relation->delete();
    
    }
}

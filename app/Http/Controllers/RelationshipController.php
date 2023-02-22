<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRelationshipRequest;
use App\Http\Requests\UpdateRelationshipRequest;
use App\Models\PersonalDetail;
use App\Models\Relationship;
use Illuminate\Http\Request;

class RelationshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $relationships = Relationship::all();
        return view('relationship.index', compact('relationships'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $relationships = Relationship::all();
        return view('relationship.index', compact('relationships'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRelationshipRequest $request)
    {
        $request->validated();

        $relationship = new Relationship([
            'name' => $request->get('name'),
        ]);
        $relationship->save();
        return redirect()->route('relationship.index')
        ->withSuccess(__('Relationship created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $relationship = Relationship::where('id','=',$id)->firstOrFail();
        return view('relationships.show', compact('relationships'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $relationship = Relationship::where('id','=',$id)->firstOrFail();
        return view('relationship.edit', compact('relationships'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRelationshipRequest $request, $id)
    {
        $validated = $request->validated();
        $relationship =  Relationship::where('id','=',$id)->firstOrFail();
        $relationship->name = $request->get('name');
        $relationship->update();
        return redirect()->route('relationship.index')
        ->withSuccess(__('Relationship created successfully.'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Relationship $relationship, $id)
    {
        $relationship->delete();
        
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateApprovingSignatoryRequest;
use App\Http\Requests\UpdateApprovingSignatoryRequest;
use App\Models\ApprovingSignatory;
use Illuminate\Http\Request;

class ApprovingSignatoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $approvingSignatories = ApprovingSignatory::get();
        return view('approvingsignatory.index', compact('approvingSignatories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $approvingSignatories = ApprovingSignatory::get();
        return view('approvingsignatory.index', compact('approvingSignatories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateApprovingSignatoryRequest $request)
    {
        $validatedData = $request->validate([
            
            'name' => 'required|string|max:255',
        ]);

        $approvingSignatory = ApprovingSignatory::create($validatedData);
        return redirect()->route('approving.signatory.index')
        ->withSuccess(__('Approving Signatory created successfully.'));
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
        $approvingSignatory = ApprovingSignatory::findOrFail($id);
        return view('approvingsignatory.edit', compact('approvingSignatory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateApprovingSignatoryRequest $request, $approvingSignatory)
    {
        $request->validated();
        $approvingSignatory = ApprovingSignatory::findOrFail($approvingSignatory);


        $approvingSignatory->update([
            'name' => $request->name,
            
        ]);

        return redirect()->route('approving.signatory.index')
            ->withSuccess(__('Approving Signatory updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $approvingSignatory = ApprovingSignatory::findOrFail($id);
        $approvingSignatory->delete();
        return redirect()->route('approving.signatory.index')
        ->with('success','Approving Signatory deleted successfully');
   
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDepartmentRequest;
use App\Http\Requests\UpdateDepartmentRequest;
use App\Models\Department;


class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $departments = Department::get();
        return view('department.index', compact('departments'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::get();
        return view('department.index', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateDepartmentRequest $request)
    {
        
        $validatedData = $request->validate([
            
            'name' => 'required|string|max:255',
        ]);

        $department = Department::create($validatedData);
        return redirect()->route('department.index')
        ->withSuccess(__('Department created successfully.'));


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $department = Department::findOrFail($id);

        // return view('departments.show', compact('department'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $department = Department::findOrFail($id);

        return view('department.edit', compact('department'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDepartmentRequest $request, $id)
    {
        $validated = $request->validated();
        $department =  Department::where('id','=',$id)->firstOrFail();


        $request->validate([
            'name' => 'required|unique:department,name,'.$department->id
        ]);

        $department->update($request->only('name'));

        return redirect()->route('department.index')
            ->withSuccess(__('Department updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        $department->delete();
        return redirect()->route('department.index')->with('success', 'Department deleted successfully');
    }
}

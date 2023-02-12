<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLeaveRequest;
use App\Http\Requests\UpdateLeaveRequest;
use App\Models\StudyLeave;
use Illuminate\Http\Request;

class StudyLeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studyLeave = StudyLeave::all();
        return view('studyleave.index', compact('studyLeave'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('studyLeave.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateLeaveRequest $request)
    {
        $request->validated();
        
        $studyLeave = new StudyLeave([
            'personal_detail_id' => 'required|integer',
            'date_started' => 'required|date',
            'date_ended' => 'required|date',
            'institution_of_study' => 'required|string|max:255',
            'course_of_study' => 'required|string|max:255',
            'certificate_date' => 'required|date',
            'approving_signatory' => 'required|string|max:255',
        ]);

        $studyLeave->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $studyLeave = StudyLeave::find($id);
        return view('studyLeave.show', compact('studyLeave'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $studyLeave = StudyLeave::find($id);
        return view('studyLeave.edit', compact('studyLeave'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLeaveRequest $request, $id)
    {
        $validated = $request->validated();
        $studyLeave =  StudyLeave::where('id','=',$id)->firstOrFail();
        $studyLeave = new StudyLeave([
            'personal_detail_id' => 'required|integer',
            'date_started' => 'required|date',
            'date_ended' => 'required|date',
            'institution_of_study' => 'required|string|max:255',
            'course_of_study' => 'required|string|max:255',
            'certificate_date' => 'required|date',
            'approving_signatory' => 'required|string|max:255',
        ]);

        $studyLeave->update();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $studyLeave =  StudyLeave::where('id','=',$id)->firstOrFail();
        $studyLeave->delete();
    }
}

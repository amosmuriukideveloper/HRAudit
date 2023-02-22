<?php

namespace App\Http\Controllers;

use App\Events\SendConfirmationEmail;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('roles')->get();
        $departments = Department::all();
        $roles = Role::all()->pluck('name');
        return view('access.users.index', compact('users','roles','departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $departments = Department::all();
        $roles = Role::all()->pluck('name');
        return view('access.users.create', compact('roles','departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {

        $request->validated();
        $input = $request->all();

        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        if($user){
        $user->assignRole($request->input('roles'));
        // $request->has('sendEmail') ? event(new SendConfirmationEmail($user)) : '';
        return redirect()->route('access.users.index')->with('success','User created successfully');
        }
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
        $user = User::findOrFail($id);
        $userRoles = $user->getRoleNames();
        $roles = Role::all()->pluck('name');
        $departments = Department::all();
        return view ('access.users.edit', compact('roles', 'user' ,'userRoles','departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $request->validated();
        $user = User::findOrFail($id);
        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'department_id' => $request->department_id
        ]);
        $user->syncRoles($request->input('roles'));
        return redirect()->route('access.users.edit', ['id'=>$id])->with('success','User Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $user = User::findOrFail($id);
        return redirect()->route('access.users.index')->with('success','User deactivated successfully');

    }

    public function activate($id)
{
    $user = User::withTrashed()->findOrFail($id);
    $user->restore();
    return redirect()->back()->with('message', 'User activated successfully');
}

public function deactivate($id)
{
    $user = User::findOrFail($id);
    $user->delete();
    return redirect()->back()->with('message', 'User deactivated successfully');
}
}

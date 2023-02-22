<?php

namespace App\Http\Controllers;

use App\Http\Requests\AvatarUpdateRequest;
use App\Http\Requests\PasswordUpdateRequest;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Department;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Spatie\Permission\Models\Role;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function edit(Request $request)
    {
        $user = $request->user();
        $roles = Role::all()->pluck('name');
        $departments = Department::all();
        return view('profile.index', compact('user','departments', 'roles'));
    }




    public function updateProfile(ProfileUpdateRequest $request, $userId)
    {
       $request->validated();
       $user = User::findOrFail($userId);
       $user->update([
        'name' => $request->name,
        'email'=> $request->email,
        'department_id' => $request->department_id
       ]);

       $user->syncRoles($request->input('roles'));
        Profile::updateOrCreate(['user_id' => $userId, 'name' => $request->name],
                                ['title' => $request->title,
                                'email' =>  $request->email,
                                'phone' =>  $request->phone,
                                'bio' =>  $request->bio
                                ]
                            );

    return redirect()->back()->with('success', 'Profile Updated successfully');
    }

    public function updatePassword(PasswordUpdateRequest $request, $id)
    {

       $request->validated();
       $user = User::findOrFail($id);
       $inputData['password'] = Hash::make($request->password);
       $user->update($inputData);


       return redirect()->back()->with('success', 'Password Updated successfully');

    }


    public function updateAvatar(AvatarUpdateRequest $request, $id)
    {

        $request->validated();
        $file = $request->file('avatar');
        $path = $file->store('avatars', 'public');

        // Update the user's avatar
        $user = Profile::where('user_id',$id)->first();
        $user->avatar = $path;
        $user->save();

       return redirect()->back()->with('success', 'Profile Picture Updated successfully');

    }

    /**
     * Update the user's profile information.
     *
     * @param  \App\Http\Requests\ProfileUpdateRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileUpdateRequest $request)
    {

        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}

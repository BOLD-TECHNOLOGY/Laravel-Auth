<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;


class AdminprofileController extends Controller
{
    public function adminprofile(){
        //
        return view('admin.pages.adminprofile');
    }


    public function show()
    {
        $user = auth()->user();
        return view('admin.dashboard', compact('user'));  // pass the user to the view
    }

    /**
     * Update the admin profile information.
     */
    public function update(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email,' . auth()->id()],
        ]);

        // Update user details
        $user = auth()->user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        // Redirect to admin dashboard or desired route
        return redirect()->route('adminprofile')->with('status', 'Profile updated successfully!');
    }

    /**
     * Update the admin's password.
     */
    public function updatePassword(Request $request)
    {
        // Validate the password inputs
        $request->validate([
            'password' => ['required'],
            'new-password' => ['required', 'confirmed', Password::defaults()],
        ]);

        $user = auth()->user();

        // Check if the current password is correct
        if (!Hash::check($request->password, $user->password)) {
            return back()->withErrors(['password' => 'The provided password does not match your current password.']);
        }

        // Update the password
        $user->password = Hash::make($request->input('new-password'));
        $user->save();

        return redirect()->route('adminprofile.show')->with('status', 'Password updated successfully!');
    }

    /**
     * Delete the admin's profile.
     */

    public function destroy(Request $request)
    {
        $user = auth()->user();

        // Ensure the admin confirms the deletion
        $request->validate([
            'confirm-password' => ['required'],
        ]);

        if (!Hash::check($request->input('confirm-password'), $user->password)) {
            return back()->withErrors(['confirm-password' => 'The password confirmation does not match your current password.']);
        }

        // Delete the user account
        $user->delete();

        // Logout and redirect to home or another desired page
        auth()->logout();

        return redirect('/')->with('status', 'Your account has been deleted successfully.');
    }
}

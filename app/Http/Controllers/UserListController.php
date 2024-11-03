<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserListController extends Controller
{
    public function userlist(){
        //
        return view('admin.pages.users');
    }

    // Display the list of users
    public function index()
    {
        $users = User::all();
        return view('admin.pages.users', compact('users'));
    }



    // Change the role of a specific user
    public function changeRole(Request $request)
    {
        $user = User::where('id', $request->input('user_id'))->firstOrFail();
        $user->role = $request->input('role');
        $user->save();

        return redirect()->route('users')->with('success', 'User role updated successfully.');
    }



     // Delete a specific user
     public function deleteUser(Request $request)
     {
         $user = User::where('id', $request->input('user_id'))->firstOrFail();
         $user->delete();
 
         return redirect()->route('users')->with('success', 'User deleted successfully.');
     }


}

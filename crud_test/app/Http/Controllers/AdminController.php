<?php

// app/Http/Controllers/AdminController.php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }


            public function editUserRole(User $user)
            {
                return view('admin.edit-user-role', compact('user'));
            }

            public function updateUserRole(Request $request, User $user)
            {
                $this->validate($request, [
                    'type' => 'required|in:1,2',
                ]);

                $user->update(['type' => $request->input('type')]);

                return redirect()->route('admin.view-all-users')->with('success', 'User role updated successfully.');
            }

            public function viewAllUsers()
            {
                $users = User::all();
                return view('admin.view-all-users', compact('users'));
            }
        

}

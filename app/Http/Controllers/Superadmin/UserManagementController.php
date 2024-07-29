<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('superadmin.users_index', compact('users'));
    }

    public function create()
    {
        return view('superadmin.create');
    }

    public function store(Request $request)
    {
        // Validate and create user
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
        ]);

        return redirect()->back()->with('message','User Created Successfully');
    }

    public function edit(User $user)
    {
        return view('superadmin.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        // Validate and update user
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $user->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password'] ? bcrypt($validated['password']) : $user->password,
        ]);

        return redirect()->back()->with('message','User Updated Successfully');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back()->with('message','User Deleted Successfully');
    }
}


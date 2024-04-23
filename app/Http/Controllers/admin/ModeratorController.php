<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\UserCreatedMail;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ModeratorController extends Controller
{

    public function index()
    {
        // Retrieve users with the role "moderator"
        $users = User::all();

        $moderators = User::whereHas('roles', function ($query) {
            $query->where('name', 'moderator');
        })->get();

        return view('admin.moderator.index',compact('moderators','users'));
    }
    public function create()
    {
        // Fetch existing users
        $users = User::all();
        return view('admin.moderator.create', compact('users'));
    }


    public function store(Request $request)
{
    // Validate the incoming request
    $request->validate([
        'user_ids' => 'nullable|array', // Array of user IDs if existing users are selected
        'user_ids.*' => 'exists:users,id', // Each user ID must exist in the users table
        'name' => 'required_if:create_new_user,true|string|max:255', // Required if creating a new user
        'email' => 'required_if:create_new_user,true|email|unique:users,email', // Required if creating a new user, must be unique
        'password' => 'required_if:create_new_user,true|string|min:8', // Required if creating a new user, minimum 8 characters
    ]);
    

    // Logic to create new moderator user or assign moderator role to existing user(s)
    if ($request->filled('user_ids')) {
        // Assign moderator role to existing user(s)
        $users = User::find($request->input('user_ids'));
        $moderatorRole = Role::where('name', 'moderator')->firstOrFail();

        foreach ($users as $user) {
            $user->roles()->syncWithoutDetaching([$moderatorRole->id]);
        }
    }

    if ($request->filled('name') && $request->filled('email') && $request->filled('password')) {
        // Create a new user with the moderator role
        $password = $request->input('password');
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($password),
        ]);

        // Assign moderator role to the new user
        $moderatorRole = Role::where('name', 'moderator')->firstOrFail();
        $user->roles()->attach($moderatorRole);

        // Optionally, send an email to the new moderator with their password
        Mail::to($user->email)->send(new UserCreatedMail($password));
    }

    // Redirect back with success message
    return redirect()->route('admin.moderator.create')->with('success', 'Moderator(s) created successfully.');
}
}

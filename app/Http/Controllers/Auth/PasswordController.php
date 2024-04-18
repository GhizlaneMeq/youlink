<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{

    public function edit()
    {
        return view('Auth.updatePassword');
    }
    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user->password = Hash::make($request->password);
        $user->first_login = false; // Mark first login as complete
        $user->save();

        return redirect('/')->with('success', 'Password changed successfully.');
    }
}

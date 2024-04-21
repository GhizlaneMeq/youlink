<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('user.profile', ['user' => $user]);
    }

    public function updateDescription(Request $request)
    {
        $request->validate([
            'description' => 'required|string',
        ]);

        $user = Auth::user();
        $user->description = $request->description;
        $user->save();

        return redirect()->back()->with('success', 'Description updated successfully');
    }

    public function updateAvatar(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = Auth::user();

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $avatarName = time() . '_' . $avatar->getClientOriginalName();
            $avatarPath = $avatar->storeAs('public/images/users', $avatarName);
            $user->avatar = $avatarName;
            $user->save();
            return redirect()->back()->with('success', 'Avatar updated successfully');
        }
    }

    public function updateBirthDate(Request $request)
    {
        $request->validate([
            'date_of_birth' => 'required|date',
        ]);

        $user = Auth::user();
        $user->date_of_birth = $request->date_of_birth;
        $user->save();

        return redirect()->back()->with('success', 'Date of birth updated successfully');
    }

    public function updateGender(Request $request)
    {
        $request->validate([
            'gender' => 'required|in:male,female',
        ]);

        $user = Auth::user();
        $user->gender = $request->gender;
        $user->save();

        return redirect()->back()->with('success', 'Gender updated successfully');
    }

    public function updateAddress(Request $request)
    {
        $request->validate([
            'address' => 'required',
        ]);

        $user = Auth::user();
        $user->address = $request->address;
        $user->save();

        return redirect()->back()->with('success', 'Address updated successfully');
    }

    public function updatePhone(Request $request)
    {
        $request->validate([
            'phone' => 'required|string|max:20', // Adjust max length as per your requirements
        ]);

        $user = Auth::user();
        $user->phone = $request->phone;
        $user->save();

        return redirect()->back()->with('success', 'Phone number updated successfully');
    }
}

<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users=User::all();
        return view('users.index',compact('users'));
    }

    public function show(User $user){
        return view('users.details',compact('user'));
    }

}

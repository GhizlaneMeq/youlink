<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class bdeController extends Controller
{
    public function index(){
        $bdes=User::all();
        return view('admin.bde.index', compact('bdes'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        
        $users = \App\Models\User::all();

        return view('users.index',compact("users"));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;

class UserController extends Controller
{
    public function index(){
        
        $users = User::all();
        //dd($users);
        return view('users.index',compact("users"));
    }

    public function edit($id){
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    public function create(){
        return view('users.create');
    }

    public function store(Request $request){
        //dd($request->all());
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        $user->save();

        return redirect()->route('users.index');

    }

    public function update(Request $request, $id){
        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;

        $user->update();
    
        return redirect()->route('users.index');
    }

    public function destroy($id){
        $user = User::find($id);
        $user->delete();

        return redirect()->route('users.index');
    }
}

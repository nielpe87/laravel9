<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;
use \App\Models\Phone;

class UserController extends Controller
{
    public function index(){
    
        $users = User::all();
      //  dd($users[0]->phone);
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
        /*
        $phone = new Phone;
        $phone->user_id = $user->id;
        $phone->number = $request->number;
        $phone->save();
        */

        $user->phone()->create([
            'number' => $request->number
        ]);

        return redirect()->route('users.index');

    }

    public function update(Request $request, $id){
        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;

        $user->update();
    
        return redirect()->route('users.index');
    }

    public function destroy(User $user){
       
        $user->delete();

        return redirect()->route('users.index');
    }
}

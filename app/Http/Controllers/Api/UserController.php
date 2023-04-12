<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\User;
use \App\Models\Phone;

class UserController extends Controller
{
    public function index(){

        $users = User::all();
        return response()->json($users, 200);

    }



    public function store(Request $request){
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
            'name'  => ['required'],
            'number' => ['required', 'min:4']
        ]);


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

        return response()->json($user, 201);

    }

    public function update(Request $request, $id){
        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;

        $user->update();

        return response()->json($user, 200);
    }

    public function destroy(User $user){

        $user->delete();

        return response()->json(['message' => 'usuario excluido'], 200);
    }
}

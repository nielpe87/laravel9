<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ],[
            'required' => "obrigatorio",
            'email'    => 'email invalido'
        ]);

        if (Auth::attempt($credentials)) {
            $user = User::find( auth()->user()->id );
            $token = $user->createToken("toke-name");

            return ['access_token' => $token->plainTextToken];

        }

        return response()->json(['error' => "email ou senha invalido"], 401);
    }

    public function logout(Request $request){

        $user = User::find( auth()->user()->id );
       $user->tokens()->delete();

        return response()->json(["mensagem" => "deslogado"], 200);
    }
}

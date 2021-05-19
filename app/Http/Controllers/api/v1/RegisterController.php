<?php

//namespace App\Http\Controllers;
namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function login(Request $request){

        $login = $request->validate([
            'email'=>'required|string',
            'password'=>'required|string',
        ]);
        if (! Auth::attempt($login)){
            return response(['message'=>'Invalid login credentials.']);
        }
        $accessToken = Auth::user()->createToken('authToken')->accessToken;
//        return response(['user'=>Auth::user(),'access_token'=>$accessToken])->header('Content-Type', 'application/json');
        return response()->json([
            'user'=>Auth::user(),
            'access_token'=>$accessToken
        ]);
    }

    public function logout()
    {
        if (Auth::check()) {
            Auth::user()->AauthAcessToken()->delete();
        };
    }


    public function fetch(){
        return response()->json([
            'user'=>Auth::user()
        ]);
    }


}

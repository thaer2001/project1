<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class RegisterController extends Controller
{
    public function register(Request $request) {

        $input=$request->all();
        $input['password']=Hash::make($input['password']);
        $user=User::create($input);
        $token=$user->createToken('Register_Token')->accessToken;

        return response()->json(['access'=>true,'message'=>'rigestered successfuly','token is'=>$token],200);
    }

    public function login(Request $request) {
        
        $token = auth()->user()->createToken('token')->accessToken;
        return response()->json(['access'=>true,'message'=>'loged-in successfully','token is'=>$token],200); 
    }
}

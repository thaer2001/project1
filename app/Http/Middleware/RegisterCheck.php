<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;
;

class RegisterCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $validator = validator::make($request->all(), [
            'name'=>'required|unique:users',
            'email'=>'required|email|unique:users',  //its unique by default but this shows the spacific error 
            'password'=>'required|min:8',
            'c_password'=>'required|same:password'
        ]);

        if($validator->fails()) {
            return response()->json(['accesss'=>false,$validator->errors()],401);
        }

        return $next($request);
    }
}

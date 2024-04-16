<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LoginCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $input = ['name'=>$request->user_name, 'password'=>$request->password];

        if (auth()->attempt($input)) {
            return $next($request);
        }else {
            return response()->json(['access'=>false, 'message'=>'not registered'],401);
        }
    }
}

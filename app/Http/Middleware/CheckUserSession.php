<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserSession
{
    public function handle(Request $request, Closure $next)
    {
        // Check if user is logged in
        if (!Auth::check()) {
            return redirect('/login')->with('error', 'Silahkan login terlebih dahulu!');
        }

        // Store user data in session if not already stored
        if (!$request->session()->has('user_data')) {
            $request->session()->put('user_data', [
                'id'    => Auth::user()->id,
                'name'  => Auth::user()->name,
                'email' => Auth::user()->email,
            ]);
        }

        return $next($request);
    }
}
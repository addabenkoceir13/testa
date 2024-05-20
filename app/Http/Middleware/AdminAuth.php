<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check())
        {
            if (Auth::user()->status == 'active') {
                if(Auth::user()->roles == 'admin')
                {
                    // toastr()->success('Administrator has been successfully logged in.');
                    return $next($request);
                }
                else
                {
                    toastr()->success('The user has been logged in successfully.');
                    return redirect('/public');
                }
            }
            else {
                toastr()->error('Sorry Admin auth, your account has not been activated.');
                return redirect('/login');
            }


        }
        else
        {
            return redirect('/home')->with('status','Please Login First');
        }
    }
}

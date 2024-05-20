<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected function authenticated()
    {
        if(Auth::user()->status == "inactive") {
            toastr()->error('Sorry, your account has not been activated.');
            return redirect('/login');
        }

        $role = Auth::user()->roles;
        switch($role) {
            case 'admin':
                toastr()->success('Administrator  has been successfully logged in.');
                return redirect('/dashboard');
                break;
            case 'user':
                toastr()->success('The user has been logged in successfully.');
                return redirect('/public');
                break;
            default:
                return redirect('/login');
                break;
        }
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}

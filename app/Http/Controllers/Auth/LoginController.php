<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request as IlluminateRequest;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    
    
   protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'username';
    }

    public function showLoginForm(IlluminateRequest $request)
    {
    
        return view('auth.login');
    }

    public function redirectTo()
    {
        if (session()->has('redirect_to'))
            return session()->pull('redirect_to');

        return $this->redirectTo;
    }
}

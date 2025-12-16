<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }
    public function login(UserLoginRequest $request){
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return to_route('home');
        }
        return to_route('login.form');
    }

    public function registerForm()
    {
        return view('auth.register');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login.form');
    }
}

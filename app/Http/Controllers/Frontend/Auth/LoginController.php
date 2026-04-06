<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show() { return view('frontend.auth.login'); }

    public function login(Request $request)
    {
        $request->validate(['email' => 'required|email', 'password' => 'required']);
        if (Auth::guard('web')->attempt($request->only('email', 'password'))) {
            return redirect()->route('home');
        }
        return back()->withErrors(['email' => 'Invalid credentials']);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|email|max:50',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
        
            if (Auth::user()->isAdmin()) {
                return redirect()->intended('admin');
            } else {
                return redirect()->intended('dashboard');
            }
        }
        

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records',
        ]);
    }
}

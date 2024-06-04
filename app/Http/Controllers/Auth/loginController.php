<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request)
    {
        if (auth()->attempt($request->validate())){
            return redirect()->intended('/tasks');
        }

        return back()
        ->withErrors([
            'email'=>'The provided credentials do not match our records.',
        ]);
    }
}

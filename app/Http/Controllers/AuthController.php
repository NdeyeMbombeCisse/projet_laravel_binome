<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auths.login');
    }

    public function authentification(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' =>'required'
        ],
        [
            'email.required'=>'veuillez bien saisir un email',
            'password.required'=>'veuillez bien saisir un password',
        ]
    );

        if(auth()->attempt($request->only('email','password')))
        {
            return redirect('afficher_article');
        }else{
            return redirect()->back()->withErrors('vous n\'etes pas autorisée à vous  connecter');
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect('afficher_article');

    }
}

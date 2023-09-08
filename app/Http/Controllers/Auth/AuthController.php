<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticateUsers;
use Illuminate\Support\Facades\Auth;
 
class AuthController extends Controller
{
    use AuthenticateUsers;

    public function login(){
        return view('auth.login');
    }
    // Traiter la requête de login
    public function dologin(Request $request)
    {
      
        if (Auth::attempt($request->only('email', 'password'))) {

            if (Auth::user()->isDonneur()) {
                return redirect()->route('client.index');
            } elseif (Auth::user()->isHopitale()) {
                return redirect()->route('client.index3');
            }
        }
        return redirect()->route('login')->with('error', 'Adresse e-mail ou mot de passe incorrect.');
    } 

    // Déconnecter l'utilisateur
    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticateUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\Donneurs;
use App\Models\Hopitale;
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
    //protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $credentials= $request->only('email','password','type');

        if(Auth::guard('donneur')->attempt($credentials)){
                return view('client.index');
            }elseif(Auth::guard('hopital')->attempt($credentials)){
                return view('client.index3');
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

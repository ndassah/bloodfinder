<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticateUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\Donneurs;
use App\Models\Hopitale;
 
class AuthController extends Controller
{
    use AuthenticateUsers;

    public function dologin(){
        return view('auth.login');
    }
    // Traiter la requête de login

    
}

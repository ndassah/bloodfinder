<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Donneurs;
use App\Models\Hopitale;

class AdminController extends Controller
{
    public function dash()
    {
        return view ('dashfinder.index');
    }
    public function t404()
    {
        return view('dashfinder.404');
    }
    public function tables()
    {
        return view('dashfinder.tables');
    }
    public function stat()
    {
        return view('dashfinder.charts');
    }
    public function blank()
    {
        return view('dashfinder.blank');
    }

    // Ajoutez ici les méthodes pour les autres fonctionnalités du dashboard

    
}


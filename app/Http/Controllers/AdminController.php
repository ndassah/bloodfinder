<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Http\Request;
use App\Models\Donneurs;
use App\Models\Annonces;
use App\Models\Hopitale;

class AdminController extends Controller
{
    public function dash()
    {
        return view ('dashfinder.index');
    }
    public function dashshowdons()
    {
        return view ('dashfinder.showdons');
    }
    public function dashshowdemandes()
    {
        return view ('dashfinder.showdemandes');
    }
    public function t404()
    {
        return view('dashfinder.404');
    }
    public function tables()
    {
        return view('dashfinder.tables');
    }
   
    public function blank()
    {
        return view('dashfinder.blank');
    }
    public function dashdons()
    {
        return view('dashfinder.dashdons');
    }
    public function dashdemande()
    {
        return view('dashfinder.dashdemande');
    }

    public function getAllData(){
        $donneurs = Donneurs::all();
        $hopitale = Hopitale::all();

        $data = $donneurs->concat($hopitale);

        return view('dashfinder.tables',compact('data'));
    }

    public function compte(){
        $donneurs = Donneurs::count();
        $hopital = Hopitale::count();
        $annonce = Annonces::count();

        $total = $donneurs + $hopital;
        
        return view('dashfinder.index',['total'=>$total,'donneurs'=>$donneurs,'hopital'=>$hopital,'annonce'=>$annonce]);
    }
    // Ajoutez ici les méthodes pour les autres fonctionnalités du dashboard

    public function showdemandes2(){
        $demande = Annonces::where('type','demande')->get();

        return view('dashfinder.showdemandes',['demande'=>$demande]);
    }
    public function showdons2(){
        $dons = Annonces::where('type','dons')->get();

        return view('dashfinder.showdons',['dons'=>$dons]);
    }
}


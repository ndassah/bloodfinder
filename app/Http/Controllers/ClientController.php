<?php

namespace App\Http\Controllers;

use App\Models\Annonces;
use Illuminate\Http\Request;
class ClientController extends Controller
{
    public function index(){
        return view('client.index');
    } 
    public function index3(){
        return view('client.index3');
    }
    public function contact(){
        return view('client.contact');
    } 
    public function contact2(){
        return view('client.contact2');
    }
    public function about(){
        return view('client.about');
    }
    public function about2(){
        return view('client.about2');
    }
    public function demandes(){
        return view('client.demandes');
    }
    public function dons(){
        return view('client.dons');
    }
    public function service(){
        return view('client.service');
    }
    public function service2(){
        return view('client.service2');
    }
    
    public function publication(){
        return view('client.annonces');
    }
    public function publication2(){
        return view('client.annonces2');
    }
  
    public function showdemandes(){
        $demande = Annonces::where('type','demande')->get();

        return view('client.demandes',['demande'=>$demande]);
    }
    public function showdons(){
        $dons = Annonces::where('type','dons')->get();

        return view('client.dons',['dons'=>$dons]);
    }
}

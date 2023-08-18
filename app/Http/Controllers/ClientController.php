<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        return view('client.index');
    }
    public function contact(){
        return view('client.contact');
    }
    public function about(){
        return view('client.about');
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
    public function profile(){
        return view('client.profile');
    }
    public function annonces(){
        return view('client.annonces');
    }
}

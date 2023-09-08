<?php

namespace App\Http\Controllers;

use App\Models\Donneurs;
use Illuminate\Http\Request;

class DonneursController extends Controller
{
    public function showRegistrationForm(){
        return view('client.register');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $donneurs = Donneurs::all();
        return view ('dashfinder.dashdons',compact('donneurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('donneur.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
            $request->validate([
                'nom'=>['required','string','max:255'],
                'prenom'=>['required','string'],
                'password'=>['required','string','min:8','confirmed'],
                'email'=>['required','email','unique:donneurs'],
                'numero'=>['required','string','max:10'],
                'groupe'=>['required','string'],
                'cni'=>['required','string','unique:donneurs'],
                'location'=>['required','string','max:255'],
                'sexe'=>['required','string'],
            ]);

            

            $donneur = Donneurs::create([
                'nom'=>$request->nom,
                'prenom'=>$request->prenom,
                'password'=>$request->password,
                'email'=>$request->email,
                'numero'=>$request->numero,
                'groupe'=>$request->groupe,
                'cni'=>$request->cni,
                'location'=>$request->location,
                'sexe'=>$request->sexe,
            ]);

            

            return redirect()->route('login')->with('success','donneurs ajoute');
    }

    /**
     * Display the specified resource.
     */
    public function show(Donneurs $donneur)
    {
        //
        return view('donneur.show',compact('donneur'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Donneurs $donneur)
    {
        //
        return view('donneur.edit',compact('donneur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Donneurs $donneur)
    {
        //
        $request->validate([
            'nom'=>['required','string','max:255'],
            'prenom'=>['required','string'],
            'password'=>['required','string','min:8','confirmed'],
            'email'=>['required','email','unique:donneurs'],
            'numero'=>['required','string','max:10'],
            'groupe'=>['required','string'],
            'cni'=>['required','string','unique:donneurs'],
            'location'=>['required','string','max:255'],
            'sexe'=>['required','string'],
        ]);

        $donneur ->update([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'password'=>$request->password = $donneur->password,
            'email'=>$request->email,
            'numero'=>$request->numero,
            'groupe'=>$request->groupe,
            'cni'=>$request->cni,
            'location'=>$request->location,
            'sexe'=>$request->sexe,
        ]);

        return redirect()->route('donneur.show',$donneur)->with('success','utilisateur mise a jour');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Donneurs $donneur)
    {
        //
        $donneur->delete();

        return redirect()->route('index')->with('success','utilisateur mise a jour');

    }

    public function nombreDonneurs(){
        $nombre = Donneurs::count();
        return view('dashfinder.index',compact('nombre'));
    }

    
}

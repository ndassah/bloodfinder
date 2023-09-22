<?php

namespace App\Http\Controllers;

use App\Models\Annonces;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AnnoncesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
      return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('annonces.create');
    }
   

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nom'=>['required','string'],
            'message'=>['required','string'],
            'numero'=>['required','string','max:10'],
            'groupe'=>['required','string'],
            'location'=>['required','string','max:255'],
            'type'=>['required','string'],
        ]);

        

        $annonces = Annonces::create([
            'nom'=>$request->nom,
            'message'=>$request->message,
            'numero'=>$request->numero,
            'groupe'=>$request->groupe,
            'location'=>$request->location,
            'type'=>$request->type,
        ]);
        
        return redirect()->route('annonces.index')->with('success','donneurs ajoute');
    }



    /**
     * Display the specified resource.
     */
    public function show(Annonces $annonces)
    {
        //
        return view('annonces.show',compact('annonces'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Annonces $annonces)
    {
        //
        return view('annonces.edit',compact('annonces'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Annonces $annonces)
    {
        //
        $request->validate([
            'nom'=>['required','string'],
            'message'=>['required','string'],
            'numero'=>['required','string','max:10'],
            'groupe'=>['required','string'],
            'location'=>['required','string','max:255'],
            'type'=>['required','string'],
        ]);

        

        $annonces ->update([
            'nom'=>$request->nom,
            'message'=>$request->message,
            'numero'=>$request->numero,
            'groupe'=>$request->groupe,
            'location'=>$request->location,
            'type'=>$request->type,
        ]);

        

        return redirect()->route('index')->with('success','donneurs ajoute');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Annonces $annonces)
    {
        //
        $annonces->delete();

        return redirect()->route('index')->with('success','utilisateur mise a jour');
    }
}

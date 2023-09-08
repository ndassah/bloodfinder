<?php

namespace App\Http\Controllers;

use App\Models\Hopitale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HopitaleController extends Controller
{
    public function showRegistrationForm(){
        return view('hopital.register2');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $hopitaux = Hopitale::all();
        return view('dashfinder.dashdemande',compact('hopitaux'));
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('hopitales.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
            $request->validate([
                'nom'=>['required','string','max:255'],
                'password'=>['required','string','min:8','confirmed'],
                'email'=>['required','email','unique:hopitales'],
                'numero'=>['required','string','max:10'],
                'matricule'=>['required','string','unique:hopitales'],
                'location'=>['required','string','max:255'],
            ]);

            $hopitales = Hopitale::create([
                'nom'=>$request->nom,
                'password'=>$request->password,
                'email'=>$request->email,
                'numero'=>$request->numero,
                'matricule'=>$request->matricule,
                'location'=>$request->location,
            ]);

            return redirect()->route('login')->with('success','hopitale ajoute');
    }

    /**
     * Display the specified resource.
     */
    public function show(Hopitale $hopitales)
    {
        //
        return view('hopitales.show',compact('hopitales'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hopitale $hopitales)
    {
        //
        return view('hopitales.edit',compact('hopitales'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hopital $hopitales)
    {
        //
        $request->validate([
            'nom'=>['required','string','max:255'],
            'password'=>['required','string','min:8','confirmed'],
            'email'=>['required','email','unique:hopitales'],
            'numero'=>['required','string','max:10'],
            'matricule'=>['required','string','unique:hopitales'],
            'location'=>['required','string','max:255'],
        ]);

        $hopitales ->update([
            'nom'=>$request->nom,
            'password'=>$request->password = $hopitales->password ,
            'email'=>$request->email,
            'numero'=>$request->numero,
            'matricule'=>$request->matricule,
            'location'=>$request->location,
        ]);

        return redirect()->route('hopitales.show',$hopitales)->with('success','utilisateur mise a jour');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hopitale $hopitales)
    {
        //
        $hopitales->delete();

        return redirect()->route('index',$hopitales)->with('success','utilisateur mise a jour');

    }
}

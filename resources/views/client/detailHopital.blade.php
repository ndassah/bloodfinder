@extends('layout.foot3')

@section('contenu')

    <div>
    </div> 
    <div class="container">
        <h1>Profile de {{$hopitales->nom}}</h1>

        <p><b>Nom:</b> {{$hopitales->nom}}</p>
        <p><b>Localite:</b> {{$hopitales->location}}</p>
        <p><b>email:</b> {{$hopitales->email}}</p>
        <p><b>Immatriculation:</b> {{$hopitales->matricule}}</p>
        <p><b>Classification:</b> {{$hopitales->classification}}</p>
        <p><b>numero:</b> {{$hopitales->numero}}</p>
    </div>


@endsection
@extends('layout.foot')

@section('contenu')

    <div>
    </div> 
    <div class="container">
        <h1>Profile de {{$donneur->nom}}</h1>

        <p><b>Nom:</b> {{$donneur->nom}}</p>
        <p><b>Prenom: </b> {{$donneur->prenom}}</p>
        <p><b>age:</b> {{$donneur->age}} ans</p>
        <p><b>sexe:</b> {{$donneur->sexe}}</p>
        <p><b>Localite:</b> {{$donneur->location}}</p>
        <p><b>email:</b> {{$donneur->email}}</p>
        <p><b>numero:</b> {{$donneur->numero}}</p>
        <p><b>groupe sanguin: </b>{{$donneur->groupe}}</p>
        <p><b>cni: </b> {{$donneur->cni}}</p>
    </div>


@endsection
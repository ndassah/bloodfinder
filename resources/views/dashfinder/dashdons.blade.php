@extends('dashfinder.foot2')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
   
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">liste des donneurs</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Localité</th> 
                            <th>sexe</th>
                            <th>numero</th>
                            <th>Groupe sanguin</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Localité</th> 
                            <th>sexe</th>
                            <th>numero</th>
                            <th>Groupe sanguin</th>
                            <th>action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($donneurs as $donneur)
                        <tr>
                            <td>{{ $donneur->nom }}</td>
                            <td>{{ $donneur->prenom }}</td>
                            <td>{{ $donneur->location }}</td>
                            <td>{{ $donneur->sexe}}</td>
                            <td>{{ $donneur->numero }}</td>
                            <td>{{ $donneur->groupe}}</td>
                            <td>
                                <a href="{{route('donneur.edit',$donneur)}}">
                                    <button class="btn btn-success">modifier</button>
                                </a>
                                <form action="{{route('donneur.destroy',$donneur)}}" method="post" style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">supprimer</button>
                                </form>	
                            </td>
                         </tr>
                         @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
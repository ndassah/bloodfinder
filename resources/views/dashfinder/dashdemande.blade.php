@extends('dashfinder.foot2')
@section('content')


<div class="container-fluid">

    <!-- Page Heading -->
   

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">liste des hopitaux</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>email</th>
                            <th>Localité</th> 
                            <th>matricule</th>
                            <th>numero</th>
                            <th>actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nom</th>
                            <th>email</th>
                            <th>Localité</th> 
                            <th>matricule</th>
                            <th>classification</th>
                            <th>numero</th>
                            <th>actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($hopitaux as $hopitale)
                        <tr>
                            <td>{{ $hopitale->nom }}</td>
                            <td>{{ $hopitale->email }}</td>
                            <td>{{ $hopitale->location }}</td>
                            <td>{{ $hopitale->matricule }}</td>
                            <td>{{ $hopitale->classification }}</td>
                            <td>{{ $hopitale->numero }}</td>
                            <td>
                                <a href="{{route('hopitale.edit',$hopitale)}}">
                                    <button class="btn btn-success">modifier</button>
                                </a>
                                <form action="{{route('hopitale.destroy',$hopitale)}}" method="post" style="display: inline">
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
@extends('dashfinder.foot2')
@section('content')


	
<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">liste des dons</h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
							<tr>
								<th>Nom</th>
								<th>Localité</th> 
								<th>groupe</th>
								<th>numero</th>
								<th>date</th>
								<th>action</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>Nom</th>
								<th>Localité</th> 
								<th>groupe</th>
								<th>numero</th>
								<th>date</th>
								<th>action</th>
							</tr>
						</tfoot>
						<tbody>
							@foreach ($dons as $item)
							<tr>
								<td>{{$item->nom}}</td>
								<td>{{$item->location}}</td>
								<td>{{$item->groupe}}</td>
								<td>{{$item->numero}}</td>
								<td>{{$item->created_at}}</td>
								<td>								
									<a href="tel: {{$item->numero}} ">
										<button class="btn btn-success">Accepter</button>
									</a>
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
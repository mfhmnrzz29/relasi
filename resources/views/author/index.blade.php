@extends('layouts.app')
@section('content')
<div class="container-fluid">
	<div class="row">
	<div class="container-fluid">
	<div class="row">
	<div class="col-md-2">
	<!--nav-->
				@include('layouts.dashboard')
			<!--end nav-->
			</div>
	<div class="col-md-10">
		<div class="panel panel-primary">
			<div class="panel-heading">Data Author
			<div class="panel-title pull-right"><a href="/author/create">Tambah Data</a></div></div>
			<div class="panel-body">
				<table class="table">
					<thead>
						<tr>
							<th>Nama Penulis</th>
							<th>Books</th>
							<th colspan="3"><center>Aksi</center></th>
						</tr>
					</thead>
					<tbody>
						@foreach($author as $data)
						<tr>
							<td>{{$data->name}}</td>
							<td>
								@foreach($data->book as $a)
								<li>{{$a->title}}</li>
								@endforeach
							</td>
							<td>
								<a class="btn btn-success" href="/author/{{$data->id}}/edit">Edit</a>
							</td>
							<td>
								<a class="btn btn-primary" href="/author/{{$data->id}}">Show</a>
							</td>
							<td>
								<form action="{{route('author.destroy', $data->id)}}" method="POST">
									<input type="hidden" name="_method" value="DELETE">
									<input type="hidden" name="_token">
									<input type="submit" class="btn btn-danger" value="Delete">
									{{csrf_field()}}
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
</div>
@endsection
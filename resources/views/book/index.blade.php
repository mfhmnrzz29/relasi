@extends('layouts.app')
@section('content')
<div class="container-fluid">
	<div class="row">
	<div class="col-md-2">
	<!--nav-->
				@include('layouts.dashboard')
			<!--end nav-->
	</div>
	<div class="col-md-10">
		<div class="panel panel-primary">
			<div class="panel-heading">Data Buku
			<div class="panel-title pull-right"><a href="/book/create">Tambah Data</a></div></div>
			<div class="panel-body">
				<table class="table">
					<thead>
						<tr>
							<th>Title </th>
							<th>Author</th>
							<th>Amount</th>
							<th>Cover</th>
							<th colspan="3"><center>Aksi</center></th>
						</tr>
					</thead>
					<tbody>
						@foreach($book as $data)
						<tr>
							<td>{{$data->title}}</td>
							<!-- $var->method di controller -->
							<td>{{$data->author->name}}</td>
							<td>{{$data->amount}}</td>
							<td><img src="{{asset('img/'.$data->cover.'')}}" style="width: 100px; height: 100px"></td>
							<td>
								<a class="btn btn-success" href="/book/{{$data->id}}/edit">Edit</a>
							</td>
							<td>
								<a class="btn btn-primary" href="/book/{{$data->id}}">Show</a>
							</td>
							<td>
								<form action="{{route('anak.destroy', $data->id)}}" method="POST">
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
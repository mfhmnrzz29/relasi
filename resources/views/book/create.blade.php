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
		<center><h1>Data Buku</h1></center>
		<div class="panel panel-primary">
			<div class="panel-heading">Data Buku
			<div class="panel-title pull-right">
			<a href="{{ URL::previous() }}">Kembali</a></div></div>
			<div class="panel-body">
				<form action="{{route('book.store')}}" method="post" enctype="multipart/form-data">
					{{csrf_field()}}

					<div class="form-group">
						<label class="control-lable">Title</label>
						<input type="text" name="title" class="form-control" required="" >
					</div>
					<div class="form-group">
						<label class="control-lable">Nama Author</label>
						<select name="author_id" class="form-control">
							@foreach($author as $data)
							<option value="{{$data->id}}">
								{{$data->name}}
							</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label class="control-lable">Amount</label>
						<input type="text" name="amount" class="form-control" required="" >
					</div>
					<div class="form-group" >
						<label class="control-lable">Cover</label>
						<input type="file" name="cover" class="form-control">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success">Simpan</button>
						<button type="reset" class="btn btn-danger">Reset</button>
					</div>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
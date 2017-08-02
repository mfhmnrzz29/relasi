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
			<div class="panel-heading">Data Penulis
			<div class="panel-title pull-right">
			<a href="{{ URL::previous() }}">Kembali</a></div></div>
			<div class="panel-body">
				<form action="{{route('author.store')}}" method="post">
					{{csrf_field()}}

					<div class="form-group">
						<label class="control-lable">Nama Penulis</label>
						<input type="text" name="name" class="form-control" required="" >
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
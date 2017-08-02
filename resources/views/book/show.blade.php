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
			<div class="panel-title pull-right">
			<a href="{{ URL::previous() }}">Kembali</a></div></div>
			<div class="panel-body">
				<form action="{{route('book.update', $book->id)}}" method="post" enctype="multipart/form-data">
					<input type="hidden" name="_method" value="PUT">
					<input type="hidden" name="_token" value="{{csrf_token()}}">

					<div class="form-group">
						<label class="control-lable">Title</label>
						<input type="text" name="title" class="form-control" required="" value="{{$book->title}}" readonly="">
					</div>
					<div class="form-group">
						<label class="control-lable">Nama Author</label>
						<select name="author_id" class="form-control" disabled="">
							@foreach($author as $data)
							<option value="{{$data->id}}">
								{{$data->name}}
							</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label class="control-lable">Amount</label>
						<input type="text" name="amount" class="form-control" required="" value="{{$book->amount}}" readonly="">
					</div>
					<div class="form-group" >
						<label class="control-lable">Cover</label>
						<img src="{{asset('img/'.$book->cover.'')}}" style="width: 100px; height: 100px">
					</div>
				</form>		
			</div>
			</div>
		</div>
	</div>
</div>
@endsection
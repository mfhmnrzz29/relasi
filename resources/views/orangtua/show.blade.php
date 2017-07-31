@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<center><h1>Data Orang Tua</h1></center>
		<div class="panel panel-primary">
			<div class="panel-heading">Data Orang Tua
			<div class="panel-title pull-right"><a href="{{ URL::previous() }}">Kembali</a></div></div>
			<div class="panel-body">
				<form action="{{route('orangtua.update', $ortu->id)}}" method="post">
					<input type="hidden" name="_method" value="PUT">
					<input type="hidden" name="_method" value="{{csrf_token()}}">

					<div class="form-group">
						<label class="control-lable">Nama Ayah</label>
						<input type="text" name="nama_ayah" class="form-control" required="" value="{{$ortu->nama_ayah}}" readonly="">
					</div>
					<div class="form-group">
						<label class="control-lable">Nama Ibu</label>
						<input type="text" name="nama_ibu" class="form-control" value="{{$ortu->nama_ibu}}" required="" readonly="">
					</div>
					<div class="form-group">
						<label class="control-lable">Umur Ayah</label>
						<input type="text" name="umur_ayah" class="form-control" value="{{$ortu->umur_ayah}}" required="" readonly="">
					</div>
					<div class="form-group">
						<label class="control-lable">Umur Ibu</label>
						<input type="text" name="umur_ibu" class="form-control" value="{{$ortu->umur_ibu}}" required="" readonly="">
					</div>
					<div class="form-group">
						<label class="control-lable">Alamat</label>
						<textarea class="form-control" rows="3" name="alamat" required="" readonly="">{{$ortu->alamat}}</textarea>
					</div>
				</form>
				
			</div>
		</div>
	</div>
</div>
@endsection
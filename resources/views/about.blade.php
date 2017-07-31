<!DOCTYPE html>
<html>
<head>
	<title>About</title>
</head>
<body>
@foreach($ortu as $data)<hr>
Nama ayah : {{$data->nama_ayah}}<br>
Nama ibu : {{$data->nama_ibu}}<br>
Umur ayah : {{$data->umur_ayah}}<br>
Umur Ibu : {{$data->umur_ibu}}<br><hr>
Nama anak : 
@foreach($data->anak as $key)
<li>{{$key->nama}}</li>
@endforeach
<hr>
@endforeach
</body>
</html>
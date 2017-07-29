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
@endforeach
</body>
</html>
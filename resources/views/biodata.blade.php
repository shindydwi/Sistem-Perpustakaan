<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #4 : Passing Data Controller Ke View Laravel - www.belajarlaravel.com</title>
</head>
<body>
	
	<h1>Tutorial Laravel</h1>
	<a href="https://www.belajarlaravel.com/category/laravel">www.belajarlaravel.com</a>
 
	<br>
 
	<p>Nama : {{ $nama }}</p>
 
	<p>Mata Pelajaran</p>
	<ul>
 
		@foreach($matkul as $m)
 
		<li>{{ $m }}</li>
 
		@endforeach
		
	</ul>
 
</body>
</html>
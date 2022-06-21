<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.belajarlaravel.com</title>
</head>
<body>
 
	<h2><a href="https://www.belajarlaravel.com">www.belajarlaravel.com</a></h2>
	<h3>Data Petugas</h3>
 
	<a href="{{ url('petugas') }}"> Kembali</a>
	
	<br/>
	<br/>
	@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
             @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
             @endforeach
        </ul>
    </div>
@endif
	<form action="{{ url('petugas/store') }}" method="post">
		{{ csrf_field() }}
		Nama : <input type="text" name="nama" > <br/><br/>
		Jabatan : <input type="text" name="jabatan"> <br/><br/>
		No.telp : <input type ="text" name="no_telp" > <br/><br/>
        Alamat : <input type="text" name="alamat" > <br/><br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>
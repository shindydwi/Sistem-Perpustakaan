<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.belajarlaravel.com</title>
</head>
<body>
 
	<h2><a href="https://www.belajarlaravel.com">www.belajarlaravel.com</a></h2>
	<h3>Edit Petugas</h3>
 
	<a href="Petugas"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($petugas as $p)
	<form action="/petugas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id_petugas }}"> <br/>
		Nama : <input type="text" required="required" name="nama" value="{{ $p->nama_petugas }}"> <br/>
		Jabatan :<input type="text" required="required" name="jabatan" value="{{ $p->jabatan_petugas }}"> <br/>
		No.telp :<input type="text" required="required" name="no_telp" value="{{ $p->no_telp_petugas }}"> <br/>
		Alamat :<input type ="text" required="required" name="alamat" value="{{ $p->alamat_petugas}}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>
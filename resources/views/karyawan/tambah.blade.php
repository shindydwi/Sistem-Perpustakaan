<!DOCTYPE html>
<html>
<head>
</head>
<body>

	<h2><a href="https://www.belajarlaravel.com">www.belajarlaravel.com</a></h2>
	<h3>Data Karyawan</h3>

	<a href="/karyawan"> Kembali</a>
	
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
	<form action="/karyawan/store" method="post">
		{{ csrf_field() }}
		Id : <input type="text" name="karyawan_id" > <br/><br/>
		Nip : <input type="text" name="Nip" > <br/><br/>
		Nik : <input type="text" name="Nik" > <br/><br/>
		Nama : <input type="text" name="nama" > <br/><br/>
        Jk : <input type="text" name="Jk" > <br/><br/>
        Tempat_lahir : <input type="text" name="Tempat_lahir" > <br/><br/>
        Tanggal_lahir : <input type="date" name="Tanggal_lahir" > <br/><br/>
        Telpon : <input type="text" name="Telpon" > <br/><br/>
        Agama : <input type="text" name="Agama" > <br/><br/>
        Golongan : <input type="text" name="Golongan" > <br/><br/>
        Alamat : <input type="text" name="alamat" > <br/><br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
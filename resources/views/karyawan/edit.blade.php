<!DOCTYPE html>
<html>
<head>
</head>
<body>

	<h2><a href="https://www.belajarlaravel.com">www.belajarlaravel.com</a></h2>
	<h3>Edit Karyawan</h3>

	<a href="/karyawan"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($karyawan as $p)
	<form action="/karyawan/update" method="post">
		{{ csrf_field() }}
	<input type="hidden" name="id" value="{{ $p->karyawan_id }}"> <br/>
	Id <input type="text" required="required" name="karyawan_id" value="{{ $p->karyawan_id }}"> <br/>
	Nip <input type="text" required="required" name="Nip" value="{{ $p->Nip }}"> <br/>
	Nik <input type="text" required="required" name="Nik" value="{{ $p->Nik }}"> <br/>
	Nama <input type="text" required="required" name="Nama" value="{{ $p->Nama }}"> <br/>
    Jk <input type="text" required="required" name="Jk" value="{{ $p->Jk }}"> <br/>
    Tempat_lahir <input type="text" required="required" name="Tempat_lahir" value="{{ $p->Tempat_lahir }}"> <br/>
    Tanggal_lahir <input type="text" required="required" name="Tanggal_lahir" value="{{ $p->Tanggal_lahir }}"> <br/>
    Telpon <input type="text" required="required" name="Telpon" value="{{ $p->Telpon }}"> <br/>
    Agama <input type="text" required="required" name="Agama" value="{{ $p->Agama }}"> <br/>
    Alamat <input type="text" required="required" name="Alamat" value="{{ $p->Alamat }}"> <br/>
    Golongan <input type="text" required="required" name="Golongan" value="{{ $p->Golongan }}"> <br/>
	<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		

</body>
</html>
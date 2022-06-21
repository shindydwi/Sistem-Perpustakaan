<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">
</head>
<body>
<div class="container">
		<div class="card">
			<div class="card-body">

	<h2 class="text-center"><a href="https://www.belajarlaravel.com">www.belajarlaravel.com</a></h2>
	<h3>Data Karyawan</h3>
 
	<a href="/karyawan/tambah"> + Tambah Karyawan Baru</a>
	
	<br/>
	<br/>
	<div class="form-group">
					
	</div>
	<p>Cari Data karyawan :</p>
	<form action="/karyawan/cari" method="GET"class="form-inline">
	<input class="form-control"type="text" name="cari" placeholder="Cari karyawan .." value="{{ old('cari') }}">
	<input class="btn btn-primary ml-3"type="submit" value="CARI">
	</form>
	<table class="table table-bordered">
		<tr>
			<th>karyawan_id</th>
			<th>Nip</th>
			<th>Nik</th>
			<th>Nama</th>
            <th>Jk</th>
            <th>Tempat_lahir</th>
            <th>Tanggal_lahir</th>
            <th>Telpon</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>Golongan</th>
			<th>Opsi</th>
		</tr>
		@foreach($karyawan as $p)
		<tr>
			<td>{{ $p->karyawan_id }}</td>
			<td>{{ $p->Nip }}</td>
			<td>{{ $p->Nik }}</td>
            <td>{{ $p->Nama }}</td>
            <td>{{ $p->Jk }}</td>
            <td>{{ $p->Tempat_lahir }}</td>
            <td>{{ $p->Tanggal_lahir }}</td>
            <td>{{ $p->Telpon }}</td>
            <td>{{ $p->Agama }}</td>
            <td>{{ $p->Alamat }}</td>
            <td>{{ $p->Golongan }}</td>
			<td>
				<a class="btn btn-warning btn-sm"href="/karyawan/edit/{{ $p->karyawan_id }}">Edit</a>
				|
				<a class="btn btn-danger btn-sm"href="/karyawan/hapus/{{ $p->karyawan_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
	Halaman : {{ $karyawan->currentPage() }} <br/>
	Jumlah Data : {{ $karyawan->total() }} <br/>
	Data Per Halaman : {{ $karyawan->perPage() }} <br/>
 
 
	{{ $karyawan->links() }}
 
</body>
</html>
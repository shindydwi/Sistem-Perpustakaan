<!DOCTYPE html>
<html>
<head>
</head>
<body>
 
	<h2><a href="https://www.belajarlaravel.com">www.belajarlaravel.com</a></h2>
	<h3>Data Buku</h3>
 
	<a href="{{ url('buku') }}"> Kembali</a>
	
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
	<form action="{{ url('buku/store') }}" method="post">
		{{ csrf_field() }}
		Kode : <input type="text" name="kode_buku" > <br/> <br/>
		Judul : <input type="text" name="judul_buku" > <br/> <br/>
		Penulis : <input type="text" name="penulis_buku" > <br/> <br/>
		Penerbit : <input type="text" name="penerbit_buku" > <br/> <br/>
       Tahun Terbit : <input type="text" name="tahun_terbit" > <br/> <br/>
       Stok : <input type="text" name="stok" > <br/> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>
@extends('master')
@section('konten')
<style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Data Anggota</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Simple</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
            <a class="btn btn-success btn-sm" href="anggota/tambah"> + Tambah anggota Baru</a>
            </div>
            <div class="row">
            </div>
				<p>Cari Data anggota :</p>
				<form action="/anggota/cari" method="GET"class="form-inline">
				<input class="form-control"type="text" name="cari" placeholder="Cari anggota .." value="{{ old('cari') }}">
				<input class="btn btn-primary ml-3"type="submit" value="CARI">
				</form>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  	<th style="width: 5px">Id</th>
                  	<th style="width: 5px">Kode</th>
                  	<th>Nama</th>
				  	        <th>Jenis Kelamin</th>
				          	<th>Jurusan</th>
				  	        <th>No Telp</th>
				          	<th>Alamat</th>
				  	        <th>Aksi</th>
                </tr>
                @foreach($anggota as $p)
	            	<tr>
                    <td>{{ $p->id_anggota }}</td>
                    <td>{{ $p->kode_anggota }}</td>
		              	<td>{{ $p->nama_anggota}}</td>
		              	<td>{{ $p->jk_anggota }}</td>
		              	<td>{{ $p->jurusan_anggota }}</td>
                    <td>{{ $p->no_telp_anggota}}</td>
                    <td>{{ $p->alamat_anggota }}</td>
		              	<td>
			            	<a class="btn btn-warning btn-sm"href="anggota/edit/{{ $p->id_anggota }}">Edit</a>
				            <a class="btn btn-danger btn-sm"href="anggota/hapus/{{ $p->id_anggota }}">Hapus</a>
			              </td>
		            </tr>
	            	@endforeach
              </table>
            </div>
            Halaman : {{ $anggota->currentPage() }} <br/>
            Jumlah Data : {{ $anggota->total() }} <br/>
            Data Per Halaman : {{ $anggota->perPage() }} <br/>
          
          
            {{ $anggota->links() }}
 
@endsection
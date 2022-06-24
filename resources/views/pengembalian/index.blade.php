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
      <h1>
        Data Pengembalian
      </h1>
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
            <a class="btn btn-success btn-sm" href="pengembalian/tambah"> + Tambah Pengembalian Baru</a>
            </div>
            <div class="row">
            </div>
				<p>Cari Data pengembalian :</p>
				<form action="/buku/cari" method="GET"class="form-inline">
				<input class="form-control"type="text" name="cari" placeholder="Cari pengembalian .." value="{{ old('cari') }}">
				<input class="btn btn-primary ml-3"type="submit" value="CARI">
				</form>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  	<th style="width: 5px">Id</th>
                    <th>Tanggal kembali</th>
                 	  <th>Denda</th>
                    <th>Id Buku</th>
                    <th>Id Anggota</th>
                    <th>Id Petugas</th>
                    <th>Aksi</th>
                </tr>
                @foreach($pengembalian as $p)
				<tr>
           		    	<td>{{ $p->id_pengembalian }}</td>
                    <td>{{ $p->tanggal_pengembalian }}</td>
                    <td>{{ $p->denda }}</td>
                    <td>{{ $p->id_buku }}</td>
                    <td>{{ $p->id_anggota }}</td>
                    <td>{{ $p->id_petugas }}</td>
                    <td>
                    <a class="btn btn-warning btn-sm"href="pengembalian/edit/{{ $p->id_pengembalian }}">Edit</a>
                    <a class="btn btn-danger btn-sm"href="pengembalian/hapus/{{ $p->id_pengembalian }}">Hapus</a>
                    </td>
				</tr>	
				@endforeach
              </table>
            </div>
            Halaman : {{ $pengembalian->currentPage() }} <br/>
            Jumlah Data : {{ $pengembalian->total() }} <br/>
            Data Per Halaman : {{ $pengembalian->perPage() }} <br/>
          
          
            {{ $pengembalian->links() }}

@endsection
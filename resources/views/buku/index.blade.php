<!-- Menghubungkan dengan view template master -->
@extends('master')
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Buku
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
            <a class="btn btn-success btn-sm" href="/buku/tambah"> + Tambah Buku Baru</a>
            </div>
            <div class="row">
            </div>
			      <p>Cari Data buku :</p>
				    <form action="/buku/cari" method="GET"class="form-inline">
				    <input class="form-control"type="text" name="cari" placeholder="Cari rak .." value="{{ old('cari') }}">
				    <input class="btn btn-primary ml-3"type="submit" value="CARI">
				    </form>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                	<tr>
                		<th style="width: 10px">Id</th>
                 	 	<th style="width: 5px">Kode</th>
                 		<th style=>Judul</th>
				  		<th>Penulis</th>
				  		<th style=>Penerbit</th>
				  		<th style=>Tahun</th>
				  		<th style="width: 5px">Stok</th>
				  		<th>Aksi</th>
                	</tr>
                @foreach($buku as $p)
		            <tr>
                  		<td>{{ $p->id_buku }}</td>
                  		<td>{{ $p->kode_buku }}</td>
		              	<td>{{ $p->judul_buku }}</td>
		              	<td>{{ $p->penulis_buku }}</td>
			            <td>{{ $p->penerbit_buku }}</td>
                  		<td>{{ $p->tahun_terbit }}</td>
                  		<td>{{ $p->stok }}</td>
		            	<td>
				          <a class="btn btn-warning btn-sm"href="/buku/edit/{{ $p->id_buku }}">Edit</a>
				          <a class="btn btn-danger btn-sm"href="/buku/hapus/{{ $p->id_buku }}">Hapus</a>
		            	</td>
		            </tr>
	            @endforeach
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
          <!-- /.box -->

@endsection
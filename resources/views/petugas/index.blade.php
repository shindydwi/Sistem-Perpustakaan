<!-- Menghubungkan dengan view template master -->
@extends('master')
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Data Petugas</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Simple</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
			<a class="btn btn-success btn-sm" href="/petugas/tambah"> + Tambah Petugas Baru</a>
            </div>
			<div class="form-group">
			</div>
				<p>Cari Data petugas :</p>
					<form action="/petugas/cari" method="GET"class="form-inline">
					<input class="form-control"type="text" name="cari" placeholder="Cari petugas .." value="{{ old('cari') }}">
					<input class="btn btn-primary ml-3"type="submit" value="CARI">
					</form>
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  	<th style="width: 10px">Id</th>
                  	<th style="width: 10px">Nama</th>
                  	<th>Jabatan</th>
				          	<th>No Telp</th>
				          	<th>Alamat</th>
				          	<th>Aksi</th>
                </tr>
                @foreach($petugas as $p)
			          <tr>
				 	          <td>{{ $p->id_petugas }}</td>
			     	        <td>{{ $p->nama_petugas }}</td>
				 	          <td>{{ $p->jabatan_petugas }}</td>
				 	          <td>{{ $p->no_telp_petugas }}</td>
            	 	    <td>{{ $p->alamat_petugas }}</td>
				 	          <td>
				 	          <a class="btn btn-warning btn-sm"href="/petugas/edit/{{ $p->id_petugas }}">Edit</a>
				 	          <a class="btn btn-danger btn-sm"href="/petugas/hapus/{{ $p->id_petugas }}">Hapus</a>
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
@extends('master')
@section('konten')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Rak
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
			<a class="btn btn-success btn-sm" href="rak/tambah"> + Tambah Rak Baru</a>
            </div>
			<section class="content">
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
                  <th style="width: 10px">Id_rak</th>
                  <th>Nama</th>
                  <th>Lokasi</th>
				  <th>Id_buku</th>
				  <th>Aksi</th>
                </tr>
                @foreach($rak as $p)
				<tr>
					<td>{{ $p->id_rak }}</td>
					<td>{{ $p->nama_rak }}</td>
					<td>{{ $p->lokasi_rak }}</td>
					<td>{{ $p->id_buku }}</td>
					<td>
						<a class="btn btn-warning btn-sm"href="rak/edit/{{ $p->id_rak }}">Edit</a>
						<a class="btn btn-danger btn-sm"href="rak/hapus/{{ $p->id_rak }}">Hapus</a>
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
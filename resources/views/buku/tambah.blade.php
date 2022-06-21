@extends('master')
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
        <li><a href="#">Forms</a></li>
        <li class="active">Data Buku</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><a href="{{ url('buku') }}"> Kembali</a></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			<form action="{{ url('buku/store') }}" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputKode">Kode</label>
                  <input type="kode_buku" class="form-control" id="exampleInputkode" placeholder="Kode Buku">
                </div>
                <div class="form-group">
                  <label for="exampleInputjudul">Judul</label>
                  <input type="judul_buku" class="form-control" id="exampleInputjudul" placeholder="Judul Buku">
                </div>
				<div class="form-group">
                  <label for="exampleInputpenulis">Penulis</label>
                  <input type="penulis_buku" class="form-control" id="exampleInputpenulis" placeholder="Penulis Buku">
                </div>
				<div class="form-group">
                  <label for="exampleInputpenerbit">Penerbit</label>
                  <input type="penerbit_buku" class="form-control" id="exampleInputpenerbit" placeholder="Penerbit Buku">
                </div>
				<div class="form-group">
                  <label for="exampleInputtahunterbit">Tahun Terbit</label>
                  <input type="tahun_terbit" class="form-control" id="exampleInputtahunterbit" placeholder="Tahun Terbit">
                </div>
				<div class="form-group">
                  <label for="exampleInputstok">Stok</label>
                  <input type="stok" class="form-control" id="exampleInputstok" placeholder="Stok Buku">
                </div>

              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan Data</button>
              </div>
            </form>
          </div>
          <!-- /.box -->


<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
@endsection
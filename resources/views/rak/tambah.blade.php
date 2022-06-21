@extends('master')
@section('konten')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Rak
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Data Rak</li>
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
              <h3 class="box-title"><a href="{{ url('rak') }}"> Kembali</a></h3>
              @if (count($errors) > 0)
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
              @endif
            </div>

			<form action="{{ url('rak/store') }}" method="post">
      {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputidrak">Id Rak</label>
                  <input type="text" name="id_rak" class="form-control" id="exampleInputidrak" placeholder="Id Rak">
                </div>
                <div class="form-group">
                  <label for="exampleInputnama">Nama</label>
                  <input type="text" name="nama_rak" class="form-control" id="exampleInputnama" placeholder="Nama Rak">
                </div>
				<div class="form-group">
                  <label for="exampleInputlokasi">Lokasi</label>
                  <input type="text" name="lokasi_rak" class="form-control" id="exampleInputlokasi" placeholder="Lokasi Rak">
                </div>
				<div class="form-group">
                  <label for="exampleInputid">Id Buku</label>
                  <input type="text" name="id_buku" class="form-control" id="exampleInputid" placeholder="Id Buku">
                </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan Data</button>
              </div>
            </form>
          </div>
          


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
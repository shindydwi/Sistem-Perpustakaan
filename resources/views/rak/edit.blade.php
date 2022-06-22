@extends('master')
@section('konten')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Rak
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Edit Rak</li>
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
            </div>
           
            @foreach($rak as $p)
            <form action="rak/update" method="post">
              {{ csrf_field() }}
              <input type="hidden" name="id" value="{{ $p->id_rak}}"> <br/>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputidrak">Id Rak</label>
                  <input type="text" required="required" name="id_rak" value="{{ $p->id_rak }}"class="form-control" id="exampleInputidrak" placeholder="Id Rak">
                </div>
                <div class="form-group">
                  <label for="exampleInputnama">Nama</label>
                  <input type="text" required="required" name="nama_rak" value="{{ $p->nama_rak }}"class="form-control" id="exampleInputnama" placeholder="Nama Rak">
                </div>
				<div class="form-group">
                  <label for="exampleInputlokasi">Lokasi</label>
                  <input type="text" required="required" name="lokasi_rak" value="{{ $p->lokasi_rak }}"class="form-control" id="exampleInputlokasi" placeholder="Lokasi Rak">
                </div>
				<div class="form-group">
                  <label for="exampleInputid">Id Buku</label>
                  <input type="text" required="required" name="id_buku" value="{{ $p->id_buku }}"class="form-control" id="exampleInputid" placeholder="Id Buku">
                </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan Data</button>
              </div>
            </form>
            @endforeach
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
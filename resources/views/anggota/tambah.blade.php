@extends('master')
@section('konten')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Anggota
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Data Anggota</li>
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
              <h3 class="box-title"><a href="{{ url('/anggota') }}"> Kembali</a></h3>
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
            <!-- /.box-header -->
            <!-- form start -->
			<form action="{{ url('anggota/store') }}" method="post">
      {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputKode">Kode</label>
                  <input type="text" name="kode_anggota" class="form-control" id="exampleInputkode" placeholder="Kode Anggota">
                </div>
                <div class="form-group">
                  <label for="exampleInputNama">Nama</label>
                  <input type="text" name="nama_anggota" class="form-control" id="exampleInputNama" placeholder="Nama Anggota">
                </div>
                  <div class="form-group">
                  <label>Jenis kelamin</label>
                  <select class="form-control">
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                  </select>
                </div>
				<div class="form-group">
                  <label for="exampleInputjurusan">Jurusan</label>
                  <input type="text" name="jurusan_anggota" class="form-control" id="exampleInputjurusan" placeholder="Jurusan Anggota">
                </div>
				<div class="form-group">
                  <label for="exampleInputNoTelp">No Telp</label>
                  <input type="text" name="no_telp_anggota" class="form-control" id="exampleInputNoTelp" placeholder="No Telpon Anggota">
                </div>
				<div class="form-group">
                  <label for="exampleInputalamat">Alamat</label>
                  <input type="text" name="alamat_anggota" class="form-control" id="exampleInputalamat" placeholder="Alamat Anggota">
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
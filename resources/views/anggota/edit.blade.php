@extends('master')
@section('konten')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
	  Edit Anggota
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Edit Anggota</li>
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
            </div>

            @foreach($anggota as $p)
            <form action="/anggota/update" method="post">
              {{ csrf_field() }}
              <input type="hidden" name="id" value="{{ $p->id_anggota }}"> <br/>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputkode">Kode</label>
                  <input type="text" required="required" name="kode_anggota" value="{{ $p->kode_anggota }}"class="form-control" id="exampleInputkode" placeholder="Kode Anggota">
                </div>
                <div class="form-group">
                  <label for="exampleInputnama">Nama</label>
                  <input type="text" required="required" name="nama_anggota" value="{{ $p->nama_anggota }}"class="form-control" id="exampleInputnama" placeholder="Nama Anggota">
                </div>
                <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control"name="jk_anggota">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
				<div class="form-group">
                  <label for="exampleInputjurusan">Jurusan</label>
                  <input type="text" required="required" name="jurusan_anggota" value="{{ $p->jurusan_anggota }}"class="form-control" id="exampleInputjurusan" placeholder="Jurusan Anggota">
                </div>
				<div class="form-group">
                  <label for="exampleInputnotelp">No Telp</label>
                  <input type="text" required="required" name="no_telp_anggota" value="{{ $p->no_telp_anggota }}"class="form-control" id="exampleInputnotelp" placeholder="No Telpon Anggota">
                </div>
				<div class="form-group">
                  <label for="exampleInputalamat">Alamat</label>
                  <input type="text" required="required" name="alamat_anggota" value="{{ $p->alamat_anggota }}"class="form-control" id="exampleInputalamat" placeholder="Alamat Anggota">
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
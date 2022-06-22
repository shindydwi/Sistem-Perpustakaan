@extends('master')
@section('konten')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
	  Edit Peminjaman
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Edit Peminjaman</li>
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
              <h3 class="box-title"><a href="{{ url('peminjaman') }}"> Kembali</a></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @foreach($peminjaman as $p)
            <form action="peminjaman/update" method="post">
              {{ csrf_field() }}
              <input type="hidden" name="id" value="{{ $p->id_peminjaman }}"> <br/>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputid">Id Peminjaman</label>
                  <input type="text"required="required"name="id_peminjaman" value="{{ $p->id_peminjaman}}"class="form-control" id="exampleInputid" placeholder="Id Peminjaman">
                </div>
                <div class="form-group">
                  <label for="exampleInputtanggalpinjam">Tanggal Pinjam</label>
                  <input type="date" required="required"name="tanggal_pinjam" value="{{ $p->tanggal_pinjam}}"class="form-control" id="exampleInputtanggalpinjam" placeholder="Tanggal Pinjam">
                </div>
				<div class="form-group">
                  <label for="exampleInputtanggalkembali">Tanggal Kembali</label>
                  <input type="date" required="required"name="tanggal_kembali" value="{{ $p->tanggal_kembali }}"class="form-control" id="exampleInputtanggalkembali" placeholder="Tanggal Kembali">
                </div>
				<div class="form-group">
                  <label for="exampleInputidbuku">Id Buku</label>
                  <input type="text"required="required"name="id_buku" value="{{ $p->id_buku}}"class="form-control" id="exampleInputidbuku" placeholder="Id Buku">
                </div>
				<div class="form-group">
                  <label for="exampleInputidanggota">Id Anggota</label>
                  <input type="text"required="required"name="id_anggota" value="{{ $p->id_anggota}}"class="form-control" id="exampleInputidanggota" placeholder="Id Anggota">
                </div>
				<div class="form-group">
                  <label for="exampleInputidpetugas">Id Petugas</label>
                  <input type="text"required="required"name="id_petugas" value="{{ $p->id_petugas}}"class="form-control" id="exampleInputidpetugas" placeholder="Id Petugas">
                </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan Data</button>
              </div>
            </form> 
            @endforeach
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
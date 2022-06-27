@extends('master')
@section('konten')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

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
                {{--<div class="form-group">
                  <label for="exampleInputid">Id Peminjaman</label>
                  <input type="text"required="required"name="id_peminjaman" value="{{ $p->id_peminjaman}}"class="form-control" id="exampleInputid" placeholder="Id Peminjaman">
                </div>--}}
        <div class="form-group">
                  <label for="exampleInputtanggalpinjam">Tanggal Pinjam</label>
                  <input type="date" required="required"name="tanggal_pinjam" value="{{ $p->tanggal_pinjam}}"class="form-control" id="exampleInputtanggalpinjam" placeholder="Tanggal Pinjam">
        </div>
				<div class="form-group">
                  <label for="exampleInputtanggalkembali">Tanggal Kembali</label>
                  <input type="date" required="required"name="tanggal_kembali" value="{{ $p->tanggal_kembali }}"class="form-control" id="exampleInputtanggalkembali" placeholder="Tanggal Kembali">
        </div>
        <div class="form-group">
                <label>Buku</label>
                <select class="form-control" name="id_buku">
                @foreach ($buku as $buku)
                <option value="{{ $buku->id_buku}}">{{ $buku->judul_buku }}</option>
                @endforeach
              </select>
        </div>
        <div class="form-group">
                <label>Anggota</label>
                <select class="form-control" name="id_anggota">
                @foreach ($anggota as $anggota)
                <option value="{{ $anggota->id_anggota}}">{{ $anggota->nama_anggota }}</option>
                @endforeach
              </select>
        </div>>

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
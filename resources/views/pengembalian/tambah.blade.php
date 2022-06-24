@extends('master')
@section('konten')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Pengembalian
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Data Pengembalian</li>
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
              <h3 class="box-title"><a href="{{ url('pengembalian') }}"> Kembali</a></h3>
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
			<form action="{{ url('pengembalian/store') }}" method="post">
      {{ csrf_field() }}
              <div class="box-body">
                {{--<div class="form-group">
                  <label for="exampleInputidpengembalian">Id Pengembalian</label>
                  <input type="text" name="id_pengembalian" class="form-control" id="exampleInputidpengembalian" placeholder="Id Pengembalian">
                </div>--}}
                <div class="form-group">
                  <label for="exampleInputtanggal">Tanggal Pengembalian</label>
                  <input type="date" name="tanggal_pengembalian" class="form-control" id="exampleInputtanggal" placeholder="Tanggal Pengembalian">
                </div>
				<div class="form-group">
                  <label for="exampleInputdenda">Denda</label>
                  <input type="text" name="denda" class="form-control" id="exampleInputdenda" placeholder="denda">
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
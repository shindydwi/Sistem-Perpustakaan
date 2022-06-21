@extends('master')
@section('konten')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Users
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Edit Users</li>
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
              <h3 class="box-title"><a href="{{ url('users') }}"> Kembali</a></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @foreach($users as $p)
	          <form action="users/update" method="post">
		        {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputname">Name</label>
                  <input type="name" value="{{ $p->name }}"class="form-control" id="exampleInputname" placeholder="Name Users">
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail">Email</label>
                  <input type="email" value="{{ $p->email }}"class="form-control" id="exampleInputEmail" placeholder="Email">
                </div>
				<div class="form-group">
                  <label for="exampleInputPassword">Password</label>
                  <input type="password" value="{{ $p->password }}"class="form-control" id="exampleInputPassword" placeholder="Password">
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
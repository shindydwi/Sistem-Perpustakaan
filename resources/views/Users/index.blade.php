<!-- Menghubungkan dengan view template master -->
@extends('master')
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
<style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
    Data Users
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
            <a class="btn btn-success btn-sm" href="/users/tambah"> + Tambah Data Users Baru</a>
            </div>
            <div class="row">
            </div>
			      <p>Cari Data Users :</p>
				    <form action="/users/cari" method="GET"class="form-inline">
				    <input class="form-control"type="text" name="cari" placeholder="Cari Data users .." value="{{ old('cari') }}">
				    <input class="btn btn-primary ml-3"type="submit" value="CARI">
				    </form>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                	<tr>
                 	 	<th>Name</th>
                 		<th>Email</th>
				  		      <th>Password</th>
                    <th>Aksi</th>
                	</tr>
                @foreach($users as $p)
		            <tr>
                  <td>{{ $p->name }}</td>
		              <td>{{ $p->email }}</td>
			            <td>{{ $p->password }}</td>
		            	<td>
				          <a class="btn btn-warning btn-sm"href="/users/edit/{{ $p->id }}">Edit</a>
				          <a class="btn btn-danger btn-sm"href="/users/hapus/{{ $p->id }}">Hapus</a>
		            	</td>
		            </tr>
	            @endforeach
              </table>
            </div>
            Halaman : {{ $users->currentPage() }} <br/>
            Jumlah Data : {{ $users->total() }} <br/>
            Data Per Halaman : {{ $users->perPage() }} <br/>
          
          
            {{ $users->links() }}

@endsection
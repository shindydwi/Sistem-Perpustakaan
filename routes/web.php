<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\RakController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\MalasngodingController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsersController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('login');
});

Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.belajarlaravel.com";
});

Route::get('blog', function () {
	return view('blog');
});

//Route::get('dosen', 'DosenController@index');
Route::get('anggota',[AnggotaController::class, 'index']);
Route::get('/anggota/tambah',[AnggotaController::class,'tambah']);
Route::post('/anggota/store',[AnggotaController::class,'store']);
Route::get('/anggota/edit/{id}',[AnggotaController::class,'edit']);
Route::post('/anggota/update',[AnggotaController::class,'update']);
Route::get('/anggota/hapus/{id}',[AnggotaController::class,'hapus']);

//Route Menangkap Data Melalui URL
//Route::get('/pegawai/{nama}', [PegawaiController::class,'index']);

//Route Menangkap Data Dari Inputan
Route::get('formulir', [PegawaiController::class,'formulir']);
Route::post('formulir/proses', [PegawaiController::class,'proses']);


// route blog
Route::get('blog', [BlogController::class,'home']);
Route::get('blog/tentang', [BlogController::class,'tentang']);
Route::get('blog/kontak',[BlogController::class,'kontak']);

//route CRUD petugas
Route::get('petugas',[PetugasController::class,'index']);
Route::get('petugas/tambah',[PetugasController::class,'tambah']);
Route::post('petugas/store',[PetugasController::class,'store']);
Route::get('petugas/edit/{id}',[PetugasController::class,'edit']);
Route::post('petugas/update',[PetugasController::class,'update']);
Route::get('petugas/hapus/{id}',[PetugasController::class,'hapus']);
Route::get('/petugas/cari',[PetugasController::class,'cari']);

//route CRUD buku
Route::get('buku',[BukuController::class,'index']);
Route::get('buku/tambah',[BukuController::class,'tambah']);
Route::post('buku/store',[BukuController::class,'store']);
Route::get('buku/edit/{id}',[BukuController::class,'edit']);
Route::post('buku/edit/buku/update',[BukuController::class,'update']);
Route::get('buku/hapus/{id}',[BukuController::class,'hapus']);
Route::get('/buku/cari',[BukuController::class,'cari']);

//route CRUD rak
Route::get('rak',[RakController::class,'index']);
Route::get('rak/tambah',[RakController::class,'tambah']);
Route::post('rak/store',[RakController::class,'store']);
Route::get('rak/edit/{id}',[RakController::class,'edit']);
Route::post('rak/edit/rak/update',[RakController::class,'update']);
Route::get('rak/hapus/{id}',[RakController::class,'hapus']);
Route::get('/rak/cari',[RakController::class,'cari']);

//route CRUD peminjaman
Route::get('peminjaman',[PeminjamanController::class,'index']);
Route::get('peminjaman/tambah',[PeminjamanController::class,'tambah']);
Route::post('peminjaman/store',[PeminjamanController::class,'store']);
Route::get('peminjaman/edit/{id}',[PeminjamanController::class,'edit']);
Route::post('peminjaman/edit/peminjaman/update',[PeminjamanController::class,'update']);
Route::get('peminjaman/hapus/{id}',[PeminjamanController::class,'hapus']);
Route::get('/peminjaman/cari',[PeminjamanController::class,'cari']);


//route CRUD pengembalian
Route::get('pengembalian',[PengembalianController::class,'index']);
Route::get('pengembalian/tambah',[PengembalianController::class,'tambah']);
Route::post('pengembalian/store',[PengembalianController::class,'store']);
Route::get('pengembalian/edit/{id}',[PengembalianController::class,'edit']);
Route::post('pengembalian/edit/pengembalian/update',[PengembalianController::class,'update']);
Route::get('pengembalian/hapus/{id}',[PengembalianController::class,'hapus']);
Route::get('/pengembalian/cari',[PengembalianController::class,'cari']);

//route CRUD Users
Route::get('users',[UsersController::class,'index']);
Route::get('users/tambah',[UsersController::class,'tambah']);
Route::post('users/store',[UsersController::class,'store']);
Route::get('users/edit/{id}',[UsersController::class,'edit']);
Route::post('users/edit/users/update',[UsersController::class,'update']);
Route::get('users/hapus/{id}',[UsersController::class,'hapus']);
Route::get('users/cari',[UsersController::class,'cari']);
Route::get('/input', [MalasngodingController::class,'input']);
Route::post('/proses', [MalasngodingController::class,'proses']);

//route CRUD 2
Route::get('/karyawan',[KaryawanController::class,'index']);
Route::get('karyawan/tambah',[KaryawanController::class,'tambah']);
Route::post('karyawan/store',[KaryawanController::class,'store']);
Route::get('/karyawan/edit/{id}',[KaryawanController::class,'edit']);
Route::post('/karyawan/update',[KaryawanController::class,'update']);
Route::get('karyawan/hapus/{id}',[KaryawanController::class,'hapus']);
Route::get('/karyawan/cari',[KaryawanController::class,'cari']);

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index2.html'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::view('/dashboard','home2');
//Route::view('/','pages.auth.login');
Route::get('/dashboard',[DashboardController::class,'index']);
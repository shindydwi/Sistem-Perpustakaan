<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class RakController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	// mengambil data dari table rak
    	$rak = DB::table('rak')->paginate(15);
 
    	// mengirim data rak ke view index
    	return view('rak.index',['rak' => $rak]);
 
    }
        // method untuk menampilkan view form tambah rak
        public function tambah()
    {
 
	    // memanggil view tambah
	    return view('rak.tambah');
 
    }
        // method untuk insert data ke table rak
        public function store(Request $request)
    {
		$this->validate($request,[
			'id_rak' => 'required',
			'nama_rak' => 'required',
			'lokasi_rak' => 'required',
			'id_buku' => 'required',
		]);
	    // insert data ke table rak
	    DB::table('rak')->insert([
		'id_rak' => $request->id_rak,
		'nama_rak' => $request->nama_rak,
		'lokasi_rak' => $request->lokasi_rak,
		'id_buku' => $request->id_buku,
	    ]);
	    // alihkan halaman ke halaman rak
	    return redirect('rak');
 
    }
		// method untuk edit data rak
		public function edit($id)
	{
		// mengambil data rak berdasarkan id yang dipilih
		$rak = DB::table('rak')->where('id_rak',$id)->get();
		// passing data rak yang didapat ke view edit.blade.php
		return view('rak.edit',['rak' => $rak]);
 
	}
		// update data rak
		public function update(Request $request)
	{
		// update data rak
		DB::table('rak')->where('id_rak',$request->id)->update([
		'id_rak' => $request->id_rak,
		'nama_rak' => $request->nama_rak,
		'lokasi_rak' => $request->lokasi_rak,
		'id_buku' => $request->id_buku,
		]);
		// alihkan halaman ke halaman rak
		return redirect('rak');
	}
		// method untuk hapus data rak
		public function hapus($id)
	{
		// menghapus data rak berdasarkan id yang dipilih
		DB::table('rak')->where('id_rak',$id)->delete();
		
		// alihkan halaman ke halaman rak
		return redirect('rak');
	}
	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table rak sesuai pencarian data
		$rak = DB::table('rak')
		->where('nama_rak','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data rak ke view index
		return view('rak.index',['rak' => $rak]);
 
	}
}
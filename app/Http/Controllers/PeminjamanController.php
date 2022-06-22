<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PeminjamanController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	// mengambil data dari table peminjaman
    	$Peminjaman = DB::table('peminjaman')->paginate(1);
 
    	// mengirim data peminjaman ke view index
    	return view('peminjaman.index',['peminjaman' => $Peminjaman]);
 
    }
	 // method untuk menampilkan view form tambah peminjaman
	 public function tambah()
	 {
  
		 // memanggil view tambah
		 return view('peminjaman.tambah');
  
	 }
	     // method untuk insert data ke table peminjaman
		 public function store(Request $request)
	 {
		 $this->validate($request,[
		'id_peminjaman' => 'required',
		'tanggal_pinjam' => 'required',
		'tanggal_kembali' => 'required',
		'id_buku' => 'required',
		'id_anggota' => 'required',
		'id_petugas' =>'required'
			  ]);
		// insert data ke table peminjaman
		DB::table('peminjaman')->insert([
		'id_peminjaman' => $request->id_peminjaman,
		'tanggal_pinjam' => $request->tanggal_pinjam,
		'tanggal_kembali' => $request->tanggal_kembali,
		'id_buku' => $request->id_buku,
		'id_anggota' => $request->id_anggota,
		'id_petugas' => $request->id_petugas,
		 ]);
		// alihkan halaman ke halaman peminjaman
		 return redirect('peminjaman');
		
	 }
	 // method untuk edit data peminjaman
	 public function edit($id)
	 {
		 // mengambil data peminjaman berdasarkan id yang dipilih
		 $peminjaman = DB::table('peminjaman')->where('id_peminjaman',$id)->get();
		 // passing data peminjaman yang didapat ke view edit.blade.php
		 return view('peminjaman.edit',['peminjaman' => $peminjaman]);
  
	 }
	 // update data peminjaman
	 public function update(Request $request)
	 {
		 // update data peminjaman
		 DB::table('peminjaman')->where('id_peminjaman',$request->id)->update([
		 'id_peminjaman' => $request->id_peminjaman,
		 'tanggal_pinjam' => $request->tanggal_pinjam,
		 'tanggal_kembali' => $request->tanggal_kembali,
		 'id_buku' => $request->id_buku,
		 'id_anggota' => $request->id_anggota,
		 'id_petugas' => $request->id_petugas,
 
		 ]);
		 // alihkan halaman ke halaman peminjaman
		 return redirect('peminjaman');
	}
	// method untuk hapus data peminjaman
	public function hapus($id)
	{
		// menghapus data peminjaman berdasarkan id yang dipilih
		DB::table('peminjaman')->where('id_peminjaman',$id)->delete();
		
		// alihkan halaman ke halaman peminjaman
		return redirect('peminjaman');
	}
	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table peminjaman sesuai pencarian data
		$buku = DB::table('peminjaman')
		->where('id_peminjaman','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data peminjaman ke view index
		return view('peminjaman.index',['peminjaman' => $peminjaman]);
 
	}
}
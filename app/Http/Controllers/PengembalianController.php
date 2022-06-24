<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Buku;
use App\Models\Anggota;
class PengembalianController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	// mengambil data dari table pengembalian
    	$pengembalian = DB::table('pengembalian')->paginate(3);
 
    	// mengirim data pengembalian ke view index
    	return view('pengembalian.index',['pengembalian' => $pengembalian]);
 
    }
         // method untuk menampilkan view form tambah pengembalian
	    public function tambah()
	 {
		$buku = DB::table('buku')->get();
		 
		$anggota = DB::table('anggota')->get();
		 // memanggil view tambah
		 return view('pengembalian.tambah',compact('buku','anggota'));
  
	 }
        // method untuk insert data ke table pengembalian
		 public function store(Request $request)
    {
		$this->validate($request,[
			//'id_pengembalian' => 'required|numeric',
			'tanggal_pengembalian' => 'required',
			'denda' => 'required',
			'id_buku' => 'required',
			'id_anggota' => 'required',
			//'id_petugas' => 'required',
		 ]);
         // insert data ke table pengembalian
         DB::table('pengembalian')->insert([
        //'id_pengembalian' => $request->id_pengembalian,
        'tanggal_pengembalian' => $request->tanggal_pengembalian,
        'denda' => $request->denda,
        'id_buku' => $request->id_buku,
        'id_anggota' => $request->id_anggota,
        //'id_petugas' => $request->id_petugas,
        ]);
        // alihkan halaman ke halaman pengembalian
        return redirect('pengembalian');
    }
    	 // method untuk edit data pengembalian
	 public function edit($id)
	 {

		 $pengembalian = DB::table('pengembalian')->where('id_pengembalian',$id)->get();
		 // passing data pengembalian yang didapat ke view edit.blade.php
		 //return view('pengembalian.edit',['pengembalian' => $pengembalian]);
		 return view('pengembalian.edit',compact('pengembalian','buku','anggota'));
     }
        // update data pengembalian
	    public function update(Request $request)
	 {
		 // update data pengembalian
		 DB::table('pengembalian')->where('id_pengembalian',$request->id)->update([
		 //'id_pengembalian' => $request->id_pengembalian,
		 'tanggal_pengembalian' => $request->tanggal_pengembalian,
		 'denda' => $request->denda,
		 'id_buku' => $request->id_buku,
		 'id_anggota' => $request->id_anggota,
		 //'id_petugas' => $request->id_petugas,
 
		 ]);
		 // alihkan halaman ke halaman pengembalian
		 return redirect('pengembalian');
     }
     // method untuk hapus data pengembalian
	public function hapus($id)
	{
		// menghapus data pengembalian berdasarkan id yang dipilih
		DB::table('pengembalian')->where('id_pengembalian',$id)->delete();
		
		// alihkan halaman ke halaman pengembalian
		return redirect('pengembalian');
	}
	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    	// mengambil data dari table pengembalian sesuai pencarian data
		$pengembalian = DB::table('pengembalian')
		->where('id_pengembalian','like',"%".$cari."%")
		->paginate();
 
    	// mengirim data pengembalian ke view index
		return view('pengembalian.index',['pengembalian' => $pengembalian]);
 
	}
}
<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class BukuController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	// mengambil data dari table buku
    	$buku = DB::table('buku')->paginate(4);
 
    	// mengirim data buku ke view index
    	return view('buku.index',['buku' => $buku]);
 
    }
         // method untuk menampilkan view form tambah buku
        public function tambah()
    {
 
	    // memanggil view tambah
	    return view('buku.tambah');
 
    }
        // method untuk insert data ke table buku
        public function store(Request $request)
    {
		$this->validate($request,[
			'kode_buku' => 'required',
			'judul_buku' => 'required',
			'penulis_buku' => 'required',
			'penerbit_buku' => 'required',
			'tahun_terbit' => 'required|numeric',
			'stok' =>'required|numeric'
		 ]);

	    // insert data ke table buku
	    DB::table('buku')->insert([
		'kode_buku' => $request->kode_buku,
		'judul_buku' => $request->judul_buku,
		'penulis_buku' => $request->penulis_buku,
		'penerbit_buku' => $request->penerbit_buku,
        'tahun_terbit' => $request->tahun_terbit,
        'stok' => $request->stok,
	    ]);
	    // alihkan halaman ke halaman buku
	    return redirect('buku');
 
    }
		// method untuk edit data buku
		public function edit($id)
	{
		// mengambil data buku berdasarkan id yang dipilih
		$buku = DB::table('buku')->where('id_buku',$id)->get();
		// passing data buku yang didapat ke view edit.blade.php
		return view('buku.edit',['buku' => $buku]);
 
	}
		// update data buku
		public function update(Request $request)
	{
		// update data buku
		DB::table('buku')->where('id_buku',$request->id)->update([
		'kode_buku' => $request->kode_buku,
		'judul_buku' => $request->judul_buku,
		'penulis_buku' => $request->penulis_buku,
		'penerbit_buku' => $request->penerbit_buku,
		'tahun_terbit' => $request->tahun_terbit,
			'stok' => $request->stok,

		]);
		// alihkan halaman ke halaman buku
		return redirect('buku');
	}
		// method untuk hapus data buku
		public function hapus($id)
	{
		// menghapus data buku berdasarkan id yang dipilih
		DB::table('buku')->where('id_buku',$id)->delete();
		
		// alihkan halaman ke halaman buku
		return redirect('buku');
	}
	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table buku sesuai pencarian data
		$buku = DB::table('buku')
		->where('judul_buku','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data buku ke view index
		return view('buku.index',['buku' => $buku]);
 
	}
}
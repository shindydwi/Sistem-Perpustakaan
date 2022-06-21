<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class PetugasController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	// mengambil data dari table petugas
    	$petugas = DB::table('petugas')->paginate(15);
 
    	// mengirim data petugas ke view index
    	return view('petugas.index',['petugas' => $petugas]);
 
    }
         // method untuk menampilkan view form tambah pegawai
        public function tambah()
    {
 
	    // memanggil view tambah
	    return view('petugas.tambah');
 
    }
        // method untuk insert data ke table petugas
        public function store(Request $request)
    {
		$this->validate($request,[
			'id_petugas' => 'required|numeric',
			'nama_petugas' => 'required',
			'jabatan_petugas' => 'required',
			'no_telp_petugas' => 'required|numeric',
			'alamat_petugas' => 'required',
		 ]);
	    // insert data ke table petugas
	    DB::table('petugas')->insert([
		'id_petugas' => $request->id,
		'nama_petugas' => $request->nama,
		'jabatan_petugas' => $request->jabatan,
		'no_telp_petugas' => $request->no_telp,
        'alamat_petugas' => $request->alamat,
	    ]);
	    // alihkan halaman ke halaman petugas
	    return redirect('petugas');
 
    }
        // method untuk edit data petugas
        public function edit($id)
    {
	    // mengambil data petugas berdasarkan id yang dipilih
	    $petugas = DB::table('petugas')->where('id_petugas',$id)->get();
	    // passing data petugas yang didapat ke view edit.blade.php
	    return view('edit',['petugas' => $petugas]);
 
    }
         // update data petugas
        public function update(Request $request)
    {
	    // update data petugas
	    DB::table('petugas')->where('id_petugas',$request->id)->update([
        'id_petugas' => $request->id,
		'nama_petugas' => $request->nama,
		'jabatan_petugas' => $request->jabatan,
		'no_telp_petugas' => $request->no_telp,
		'alamat_petugas' => $request->alamat,
	    ]);
	    // alihkan halaman ke halaman petugas
	    return redirect('petugas');
    }
        // method untuk hapus data petugas
        public function hapus($id)
    {
	    // menghapus data petugas berdasarkan id yang dipilih
	    DB::table('petugas')->where('id_petugas',$id)->delete();
		
	    // alihkan halaman ke halaman petugas
	    return redirect('petugas');
    }
	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table petugas sesuai pencarian data
		$petugas = DB::table('petugas')
		->where('nama_petugas','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data petugas ke view index
		return view('petugas.index',['petugas' => $petugas]);
 
	}
}
<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AnggotaController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	// mengambil data dari table anggotaa
    	$anggota = DB::table('anggota')->paginate(20);
 
    	// mengirim data anggota1 ke view index
    	return view('anggota.index',['anggota' => $anggota]);
 
    }
		public function tambah()
	{
		return view('anggota.tambah');

	}
	 	public function store(Request $request)
	{
		$this->validate($request,[
			'kode_anggota' => 'required',
			'nama_anggota' => 'required',
			'jk_anggota' => 'required',
			'jurusan_anggota' => 'required',
			'no_telp_anggota' => 'required|numeric',
			'alamat_anggota' =>'required'
		 ]);
		DB::table('anggota')->insert([
		'kode_anggota' => $request->kode_anggota,
		'nama_anggota' => $request->nama_anggota,
		'jk_anggota' => $request->jk_anggota,
		'jurusan_anggota' => $request->jurusan_anggota,
		'no_telp_anggota' => $request->no_telp_anggota,
		'alamat_anggota' => $request->alamat_anggota
		]);
		return redirect('/anggota');
	}
	
		public function edit($id)
	{
		$anggota = DB::table('anggota')->where('id_anggota',$id)->get();
	
		return view('anggota.edit',['anggota' => $anggota]);

	}

		public function update(Request $request)
	{
		DB::table('anggota')->where('id_anggota',$request->id)->update([
			'kode_anggota' => $request->kode_anggota,
			'nama_anggota' => $request->nama_anggota,
			'jk_anggota' => $request->jk_anggota,
			'jurusan_anggota' => $request->jurusan_anggota,
			'no_telp_anggota' => $request->no_telp_anggota,
			'alamat_anggota' => $request->alamat_anggota
	]);

		return redirect('/anggota');
	}
		public function hapus($id)
	{
		DB::table('anggota')->where('id_anggota',$id)->delete();
		
		return redirect('/anggota');
	}
}

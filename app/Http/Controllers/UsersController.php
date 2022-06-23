<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
 
class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	// mengambil data dari table buku
    	$users = DB::table('users')->paginate(1);
 
    	// mengirim data users ke view index
    	return view('users.index',['users' => $users]);
 
    }
         // method untuk menampilkan view form tambah users
        public function tambah()
    {
 
	    // memanggil view tambah
	    return view('users.tambah');
 
    }
        // method untuk insert data ke table users
        public function store(Request $request)
    {
		$this->validate($request,[

			'name' => 'required',
			'email' => 'required',
			'password' => 'required',
		 ]);

	    // insert data ke table users
	    DB::table('users')->insert([

		'name' => $request->name,
		'email' => $request->email,
        'password' => Hash :: make($request->password),
	    ]);
	    // alihkan halaman ke halaman users
	    return redirect('users');
 
    }
		// method untuk edit data users
		public function edit($id)
	{
		// mengambil data users berdasarkan id yang dipilih
		$users = DB::table('users')->where('id',$id)->get();
		// passing data users yang didapat ke view edit.blade.php
		return view('users.edit',['users' => $users]);
 
	}
		// update data users
		public function update(Request $request)
	{
		// update data users
		DB::table('users')->where('id',$request->id)->update([
		'name' => $request->name,
		'email' => $request->email,
		'password' => Hash :: make($request->password),

		]);
		// alihkan halaman ke halaman users
		return redirect('users');
	}
		// method untuk hapus data users
		public function hapus($id)
	{
		// menghapus data users berdasarkan id yang dipilih
		DB::table('users')->where('id',$id)->delete();
		
		// alihkan halaman ke halaman users
		return redirect('users');
	}
	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table users sesuai pencarian data
		$users = DB::table('users')
		->where('id','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data users ke view index
		return view('users.index',['users' => $users]);
 
	}
}
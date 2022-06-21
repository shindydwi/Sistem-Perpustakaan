<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class KaryawanController extends Controller
{
    public function index()
    {
    	$karyawan = DB::table('karyawan')->paginate(2);
 
    	return view('karyawan.index',['karyawan' => $karyawan]);
 
    }
        public function tambah()
    {
  
         return view('karyawan.tambah');
    }
        public function store(Request $request)
    {
        $this->validate($request,[
			'karyawan_id' => 'required',
			'Nip' => 'required|numeric',
			'Nik' => 'required|numeric',
			'Nama' => 'required',
			'Jk'=> 'required|numeric',
			'Tempat_lahir' =>'required',
            'Tanggal_lahir' =>'required|numeric',
            'Telpon' =>'required|numeric',
            'Agama' =>'required',
            'Alamat' =>'required',
            'Golongan' =>'required',
		 ]);
	    DB::table('karyawan')->insert([
		'karyawan_id' => $request->karyawan_id,
		'Nip' => $request->Nip,
		'Nik' => $request->Nik,
		'Nama' => $request->Nama,
        'Jk' => $request->Jk,
        'Tempat_lahir' => $request->Tempat_lahir,
        'Tanggal_lahir' => $request->Tanggal_lahir,
        'Telpon' => $request->Telpon,
        'Agama' => $request->Agama,
        'Alamat' => $request->Alamat,
        'Golongan' => $request->Golongan
	]);
	    return redirect('/karyawan');
 
    }
        public function edit($id)
    {
	    $karyawan = DB::table('karyawan')->where('karyawan_id',$id)->get();
	    return view('karyawan.edit',['karyawan' => $karyawan]);
 
    }
        public function update(Request $request)
    {
	DB::table('karyawan')->where('karyawan_id',$request->id)->update([
		'Nip' => $request->Nip,
		'Nik' => $request->Nik,
		'Nama' => $request->Nama,
        'Jk' => $request->Jk,
        'Tempat_lahir' => $request->Tempat_lahir,
        'Tanggal_lahir' => $request->Tanggal_lahir,
        'Telpon' => $request->Telpon,
        'Agama' => $request->Agama,
        'Alamat' => $request->Alamat,
        'Golongan' => $request->Golongan
	]);
	    return redirect('/karyawan');
    }
        public function hapus($id)
    {
        DB::table('karyawan')->where('karyawan_id',$id)->delete();
    
         redirect('karyawan');
    }
}
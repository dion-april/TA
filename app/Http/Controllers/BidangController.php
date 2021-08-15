<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use Illuminate\Http\Request;

class BidangController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$bidang = Bidang::all();
 
    	// mengirim data pegawai ke view index
    	return view('admin.bidang.index',['bidang' => $bidang]);
 
    }

    // method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('admin.bidang.tambah');

	}
		public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$bidang = DB::table('bidangs')->where('id',$id)->first();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('admin.bidang.edit',['bidang' => $bidang]);
	
	}

		// update data bidang
	public function update(Request $request, $id)
	{
		// update data bidang
		DB::table('Bidang')->where('id',$id)->update([
			'bidang' => $request->bidang,
			'bidang' => $request->bidang,
			'keterangan' => $request->keterangan,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect()->route('bidang.index')->withSuccess('');
    }

	public function create(){

		return view('Admin.Bidang.tambah');
	}

	public function save(Request $request)
    {
        // menyimpan data bidang yang diupload ke variabel $bidang
		$bidang = $request->bidang('bidang');

		$nama_bidang = time()."_".$bidang->getClientOriginalName();

      	        // isi dengan nama folder tempat kemana bidang diupload
		$tujuan_upload = 'dokumen';
		$bidang->move($tujuan_upload,$nama_bidang);
            
        $bidang = new Bidang();
        $bidang->bidang = $nama_bidang;
        $bidang->bidang = $request->bidang;
        $bidang->keterangan = $request->keterangan;
        $bidang->save();
        return redirect()->route('bidang.index')->withSuccess('');
    }

		// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('bidang')->where('id',$id)->delete();
			
		// alihkan halaman ke halaman pegawai
		return redirect()->route('bidang.index')->withSuccess('');
	}
}

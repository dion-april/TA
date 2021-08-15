<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SuratController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$surat = Surat::all();
 
    	// mengirim data pegawai ke view index
    	return view('admin.surat.index',['surat' => $surat]);
 
    }

    // method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('admin.surat.tambah');

	}
		public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$surat = DB::table('surat')->where('id',$id)->first();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('admin.surat.edit',['surat' => $surat]);
	
	}

		// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('surat')->where('id',$request->id)->update([
			'jenis_surat' => $request->jenis_surat,
			'nama_surat' => $request->nama_surat,
			'nama_pengirim' => $request->nama_pengirim,
			'asal_instansi' => $request->asal_instansi,
			'tanggal' => $request->tanggl,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect()->route('surat.index')->withSuccess('');
    }

	public function create(){

		return view('Admin.Surat.tambah');
	}

	public function save(Request $request)
    {
        DB::table('surat')->insert([
            'jenis_surat' => $request->jenis_surat,
			'nama_surat' => $request->nama_surat,
			'nama_pengirim' => $request->nama_pengirim,
			'asal_instansi' => $request->asal_instansi,
			'tanggal' => $request->tanggal,
        ]);
        return redirect()->route('surat.index')->withSuccess('Kamu berhasil menambahkan surat');
    }

		// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('surat')->where('id',$id)->delete();
			
		// alihkan halaman ke halaman pegawai
		return redirect()->route('surat.index')->withSuccess('');
	}
}

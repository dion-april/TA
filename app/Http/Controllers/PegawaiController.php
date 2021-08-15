<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use Illuminate\Support\Facades\DB;


class PegawaiController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$pegawai = Pegawai::all();
 
    	// mengirim data pegawai ke view index
    	return view('admin.pegawai.index',['pegawai' => $pegawai]);
 
    }

    // method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('admin.pegawai.tambah');

	}
		public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$pegawai = DB::table('pegawai')->where('id',$id)->first();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('admin.pegawai.edit',['pegawai' => $pegawai]);
	
	}

		// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('pegawai')->where('id',$request->id)->update([
			'nip' => $request->nip,
			'nama_lengkap' => $request->nama_lengkap,
			'pangkat' => $request->pangkat,
			'jabatan' => $request->jabatan,
			'unit_organisasi' => $request->unit_organisasi,
			'keterangan' => $request->alamat,
			'status' => $request->alamat,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect()->route('pegawai.index')->withSuccess('');
    }

	public function create(){

		return view('Admin.Pegawai.tambah');
	}

	public function save(Request $request)
    {
        DB::table('pegawai')->insert([
            'nip' => $request->nip,
			'nama_lengkap' => $request->nama_lengkap,
			'pangkat' => $request->pangkat,
			'jabatan' => $request->jabatan,
			'unit_organisasi' => $request->unit_organisasi,
			'keterangan' => $request->keterangan,
			'status' => $request->status,
        ]);
        return redirect()->route('pegawai.index')->withSuccess('Kamu berhasil menambahkan data pegawai');
    }

		// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('pegawai')->where('id',$id)->delete();
			
		// alihkan halaman ke halaman pegawai
		return redirect()->route('pegawai.index')->withSuccess('');
	}
}

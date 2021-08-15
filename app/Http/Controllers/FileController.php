<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\DB;


class FileController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$file = File::all();
 
    	// mengirim data pegawai ke view index
    	return view('admin.file.index',['file' => $file]);
 
    }

    // method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('admin.file.tambah');

	}
		public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$file = DB::table('files')->where('id',$id)->first();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('admin.file.edit',['file' => $file]);
	
	}

		// update data File
	public function update(Request $request, $id)
	{
		// update data file
		DB::table('Files')->where('id',$id)->update([
			'file' => $request->file,
			'bidang' => $request->bidang,
			'keterangan' => $request->keterangan,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect()->route('file.index')->withSuccess('');
    }

	public function create(){

		return view('Admin.File.tambah');
	}

	public function save(Request $request)
    {
        // menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');

		$nama_file = time()."_".$file->getClientOriginalName();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'dokumen';
		$file->move($tujuan_upload,$nama_file);
            
        $file = new File();
        $file->file = $nama_file;
        $file->bidang = $request->bidang;
        $file->keterangan = $request->keterangan;
        $file->save();
        return redirect()->route('file.index')->withSuccess('');
    }

		// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('files')->where('id',$id)->delete();
			
		// alihkan halaman ke halaman pegawai
		return redirect()->route('file.index')->withSuccess('');
	}
}

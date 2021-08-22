<?php

namespace App\Http\Controllers\pegawai;

use App\Http\Controllers\Controller;
use App\Models\File;
use Illuminate\Http\Request;

class fileController extends Controller
{
    public function index()
    {
        $files = File::all();
        return view('pegawai.data_files.index', compact('files'));
    }

    public function create()
    {
        return view('pegawai.data_files.create');
    }

    public function uploadFile(Request $request)
    {
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');

        $nama_file = time() . "_" . $file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'dokumen';
        $file->move($tujuan_upload, $nama_file);

        $file = new File();
        $file->file = $nama_file;
        $file->bidang = $request->bidang;
        $file->keterangan = $request->keterangan;
        $file->save();
        return redirect()->route('pegawai.file.index');
    }

    public function downloadFile($id)
    {
        $search = File::find($id);
        if ($search) {
            $file = public_path() . "/dokumen/" . $search->file;

            return response()->download($file);
        }
    }
}

<?php

namespace App\Http\Controllers\pegawai;

use App\Http\Controllers\Controller;
use App\Models\File;
use App\Models\Pegawai;
use App\Models\Surat;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        $pegawais = Pegawai::all();
        $surats = Surat::all();
        $files = File::all();
        return view('pegawai.dashboard', compact('pegawais', 'surats', 'files'));
    }
}

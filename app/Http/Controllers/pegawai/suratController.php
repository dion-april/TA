<?php

namespace App\Http\Controllers\pegawai;

use App\Http\Controllers\Controller;
use App\Models\Surat;
use Illuminate\Http\Request;

class suratController extends Controller
{
    public function index()
    {
        $surats = Surat::all();
        return view('pegawai.data_surat.index', compact('surats'));
    }
}

<?php

namespace App\Http\Controllers\pegawai;

use App\Http\Controllers\Controller;
use App\Models\Bidang;
use Illuminate\Http\Request;

class bidangController extends Controller
{
    public function index()
    {
        $bidangs = Bidang::all();
        return view('pegawai.data_bidangs.index', compact('bidangs'));
    }
}

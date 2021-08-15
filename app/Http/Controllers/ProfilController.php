<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function index() { $admin=DB::table('users')->where('id',Auth::id())->first();
        return view('admin.profil.index',['admin' => $admin]);
    }

    public function save(Request $request)
    {
        DB::table('users')->where('id',Auth::id())->update([
            'level'=>$request->level,
            'name' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
        ]);
        return redirect()->route('profil.index');
    }
}

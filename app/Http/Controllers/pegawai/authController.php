<?php

namespace App\Http\Controllers\pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function index()
    {
        return view('pegawai.login');
    }

    public function postLogin(Request $request)
    {
        request()->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $username = $request->username;
        $password = $request->password;


        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->level == 'pegawai') {
                return redirect()->route('pegawai.dashboard');
            }

            return redirect()->route('pegawai.login')->with('failed', 'Anda bukan pegawai');
        }

        return redirect()->route('pegawai.login')->with('failed', 'Anda bukan pegawai');
    }
}

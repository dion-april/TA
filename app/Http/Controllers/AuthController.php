<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function proses_login(Request $request)
    {
        request()->validate([
        'username' => 'required',
        'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->level == 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($user->level == 'editor') {
                return redirect()->route('editor');
            }
            return redirect('/');
        }
        return redirect()->route('login')->withSuccess('Oppes! Silahkan Cek Inputanmu');
    }

    public function register(){

        return view('register');
    }

    public function prosesRegister(Request $request)
    {
        DB::table('users')->insert([
            'level'=>$request->level,
            'name' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'password' =>Hash::make($request->password),
        ]);
        return redirect()->route('pegawai.index');
    }
    public function logout(Request $request) {
        $request->session()->flush();
        Auth::logout();
        return Redirect('login');
    }

    public function forgot()
    {
        return view('forgot');
    }
}

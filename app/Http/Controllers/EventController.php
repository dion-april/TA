<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function index()
    {
    	// mengambil data dari table event
    	$event = Event::all();
 
    	// mengirim data event ke view index
    	return view('admin.event.index',['event' => $event]);
 
    }

    // method untuk menampilkan view form tambah event
	public function tambah()
	{

		// memanggil view tambah
		return view('admin.event.tambah');

	}
		public function edit($id)
	{
		// mengambil data event berdasarkan id yang dipilih
		$event = DB::table('event')->where('id',$id)->first();
		// passing data event yang didapat ke view edit.blade.php
		return view('admin.event.edit',['event' => $event]);
	
	}

		// update data event
	public function update(Request $request)
	{
		// update data event
	DB::table('event')->where('id',$request->id)->update([
			'judul' => $request->judul,
			'keterangan' => $request->keterangan,
			'tanggal_pelaksanaan' => $request->tanggal_pelaksanaan,
			'waktu_pelaksanaan' => $request->waktu_pelaksanaan,
			'lokasi' => $request->lokasi,
		]);
		// alihkan halaman ke halaman event
		return redirect()->route('event.index')->withSuccess('');
    }

	public function create(){

		return view('Admin.Event.tambah');
	}

	public function save(Request $request)
    {

        DB::table('event')->insert([
            'judul' => $request->judul,
			'keterangan' => $request->keterangan,
			'tanggal_pelaksanaan' => $request->tanggal_pelaksanaan,
			'waktu_pelaksanaan' => $request->waktu_pelaksanaan,
			'lokasi' => $request->lokasi,
        ]);
        return redirect()->route('event.index')->withSuccess('Kamu berhasil menambahkan data event');
    }

		// method untuk hapus data event
	public function hapus($id)
	{
		// menghapus data event berdasarkan id yang dipilih
		DB::table('event')->where('id',$id)->delete();
			
		// alihkan halaman ke halaman event
		return redirect()->route('event.index')->withSuccess('');
	}
}

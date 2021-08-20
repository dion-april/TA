<?php

namespace App\Http\Controllers\pegawai;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class eventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('pegawai.data_events.index', compact('events'));
    }
}

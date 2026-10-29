<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\where;

class HomeController extends Controller
{
    public function index()
    {
        $TotalGame = DB::table('games')->count();

        DB::table('visitors')->where('id', 1)->increment('total');

        $visitor = DB::table('visitors')->where('id', 1)->first();
        $jumlah_pengunjung = $visitor->total;

        return view('index', compact('TotalGame', 'jumlah_pengunjung'));
    }

    public function wr()
    {
        return view('kalkulator.wr');
    }

    public function zodiak()
    {
        return view('kalkulator.zodiak');
    }
}

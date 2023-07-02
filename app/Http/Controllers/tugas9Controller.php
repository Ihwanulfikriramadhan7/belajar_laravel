<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tugas9Controller extends Controller
{
    public function index ()
    {
        return view('tugas9/form');
    }

    public function selesai (Request $request)
    {
    $nama =   $request->input('nama');
    $tgl  =   $request->input('tgl');
    $usia =   $request->input('usia');
    $jk   =   $request->input('jk');
    return view('tugas9/hasil',
        ['nama'=>$nama, 'tgl'=>$tgl, 'usia'=>$usia, 'jk'=>$jk]);
    }
}

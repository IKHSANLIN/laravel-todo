<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HaloController extends Controller
{
    //
    public function index()
    {
        // return "Halo, Selamat Datang";
        $name = "ikhsan";
        return view('coba.halo',compact( 'name'));
    }
}

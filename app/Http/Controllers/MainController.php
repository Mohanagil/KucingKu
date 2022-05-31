<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //untuk menampilkan halaman about
    public function index()
    {
        return view('main.index');
    }

    //untuk menampilkan halaman about
    public function about()
    {
        return view('main.about');
    }

    //untuk menampilkan halaman kontak
    public function kontak()
    {
        return view('main.kontak');
    }

    //untuk menampilkan halaman donasi
    public function donasi()
    {
        return view('main.donasi');
    }
}

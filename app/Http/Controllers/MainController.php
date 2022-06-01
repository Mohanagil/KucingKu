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

    //untuk menampilkan halaman list kucing
    public function kucing()
    {
        return view('main.kucing-list');
    }

    //untuk menampilkan halaman edit data kucing admin
    public function adopter()
    {
        return view('main.adopter');
    }

     //untuk menampilkan halaman blog
     public function blog()
     {
         return view('main.blog');
     }
}

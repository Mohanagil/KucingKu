<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Kucing;

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
        $kucing = Kucing::all();
        return view('main.kucing-list',compact('kucing'));
    }

    //untuk menampilkan halaman detail list kucing
    public function detailkucing($id)
    {
        $kucing = Kucing::find($id);
        return view('main.kucing-selengkapnya',compact('kucing'));
    }

    //untuk menampilkan halaman list blog
    public function blog()
    {
        $blog = blog::all();
        return view('main.blog-list',compact('blog'));
    }

    //untuk menampilkan halaman detail list blog
    public function detailblog($id)
    {
        $blog = blog::find($id);
        return view('main.blog-selengkapnya',compact('blog'));
    }

    //untuk menampilkan halaman form adopter di main
   public function adopt()
    {
       //menampilkan data kucing di form adopter
       $kucing = Kucing::all();
       return view('main.adopter',compact('kucing'));
    }
}

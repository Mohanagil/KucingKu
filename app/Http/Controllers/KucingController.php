<?php

namespace App\Http\Controllers;
use App\Models\Kucing;

use Illuminate\Http\Request;

class KucingController extends Controller
{
    //untuk menampilkan halaman index kucing
    public function index()
    {
        return view('admin.kucing');
    }

    //untuk menampilkan halaman tambah data kucing admin
    public function create()
    {
        return view('admin.tambah-kucing');
    }

    //untuk store data kucing ke database
    public function store(Request $request)
    {
        $this->validate($request, [
            'image'          => 'required|image|mimes:png,jpg,jpeg',
            'ras'           => 'required',
            'umur'          => 'required',
            'berat'         => 'required',
            'jenis_kelamin' => 'required'
        ]);

        //upload foto
        $image = $request->file('image');
        $image->storeAs('public/kucing', $image->hashName());

        $kucing = Kucing::create([
            'foto'          => $image->hashName(),
            'ras'           => $request->ras,
            'umur'          => $request->umur,
            'berat'         => $request->berat,
            'jenis_kelamin' => $request->ras,
        ]);

        if($kucing){
            //redirect dengan pesan sukses
            return redirect()->route('kucing.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('kucing.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

     //untuk menampilkan halaman edit data kucing admin
     public function edit()
     {
         return view('admin.edit-kucing');
     }
}

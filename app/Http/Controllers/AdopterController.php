<?php

namespace App\Http\Controllers;
use App\Models\Adopter;
use App\Models\Kucing;
use Alert;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;

class AdopterController extends Controller
{

   //untuk menampilkan halaman edit data kucing admin
   public function index()
   {
       //menampilkan data kucing di form adopter
       $kucing = Kucing::all();
       return view('main.adopter',compact('kucing'));
   }

   //untuk store data adopter ke database
   public function store(Request $request)
   {
       $this->validate($request, [
           'nama'          => 'required',
           'alamat'        => 'required',
           'no_ktp'        => 'required',
           'no_hp'         => 'required',
           'email'         => 'required',
           'profesi'       => 'required',
           'sosmed'        => 'required',
           'kucing'        => 'required',
       ]);

       $adopter = Adopter::create([
           'nama'           => $request->nama,
           'alamat'         => $request->alamat,
           'no_ktp'         => $request->no_ktp,
           'no_hp'          => $request->no_hp,
           'email'          => $request->email,
           'profesi'        => $request->profesi,
           'sosmed'         => $request->sosmed,
           'kucing'         => $request->kucing,
       ]);

       if($adopter){
           //redirect dengan pesan sukses
           Alert::success('Terimakasih!', 'Kami akan Segera Menghubungi Anda.');
           return redirect()->route('main.index');

       }else{
           //redirect dengan pesan error
           Alert::error('Error', 'Data Gagal ditambahkan!');
           return redirect()->route('main.index');
       }
   }
}

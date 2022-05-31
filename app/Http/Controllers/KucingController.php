<?php

namespace App\Http\Controllers;
use App\Models\Kucing;
use Alert;
use Yajra\DataTables\Facades\DataTables;

use Illuminate\Http\Request;

class KucingController extends Controller
{
    //untuk menampilkan halaman index kucing
    public function index()
    {
        return view('admin.kucing');
    }

    //untuk melemparkan data ke datatables
    public function data(){
        $kucing = Kucing::query();

        return Datatables::of($kucing)
            ->addIndexColumn()
            ->escapeColumns([])
            ->make(true);
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
            'image'          => $image->hashName(),
            'ras'           => $request->ras,
            'umur'          => $request->umur,
            'berat'         => $request->berat,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        if($kucing){
            //redirect dengan pesan sukses
            Alert::success('Sukses', 'Data Berhasil ditambahkan!');
            return redirect()->route('kucing.index');

        }else{
            //redirect dengan pesan error
            Alert::error('Error', 'Data Gagal ditambahkan!');
            return redirect()->route('kucing.index');
        }
    }

     //untuk menampilkan halaman edit data kucing admin
     public function edit()
     {
         return view('admin.edit-kucing');
     }
}

<?php

namespace App\Http\Controllers;
use App\Models\Kucing;
use Alert;
use Yajra\DataTables\Facades\DataTables;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            ->addColumn('action', function ($user) {
                return '<a href="'.route('kucing.edit',$user->id).'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>'.'<a href="'.
                route('kucing.destroy',$user->id).'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-edit"></i> Hapus</a>';;

            })
            ->editColumn('image', function ($query) {
                return '<img src="'.asset('storage/kucing/'.$query->image).'" width="100px" height="100px">';
            })
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
            'jenis_kelamin' => 'required',
            'deskripsi'     => 'required',
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
            'deskripsi'     => $request->deskripsi,
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
     public function edit($id)
     {
         $kucing = Kucing::find($id);
         return view('admin.edit-kucing',compact('kucing'));
     }

     //untuk mengupdate data kucing admin
     public function update(Request $request,$id)
    {
        $this->validate($request,[
            'ras'           => 'required',
            'umur'          => 'required',
            'berat'         => 'required',
            'jenis_kelamin' => 'required'
            ]);

            //get data Blog by id
            $kucing = Kucing::findOrFail($id);

            if($request->file('image') == ""){

                $kucing->update([
                    'ras'           => $request->ras,
                    'umur'          => $request->umur,
                    'berat'         => $request->berat,
                    'jenis_kelamin' => $request->jenis_kelamin,
                    'deskripsi'     => $request->deskripsi,
                ]);
            } else {

                //hapus old image
                Storage::disk('local')->delete('public/kucing'.$kucing->image);

                //upload new image
                $image = $request->file('image');
                $image->storeAs('public/kucing',$image->hashName());

                $kucing->update([
                    'image'         => $image->hashName(),
                    'ras'           => $request->ras,
                    'umur'          => $request->umur,
                    'berat'         => $request->berat,
                    'jenis_kelamin' => $request->jenis_kelamin,
                    'deskripsi'     => $request->deskripsi,
                ]);
            }

            if($kucing){
                //redirect dengan pesan sukses
                Alert::success('Sukses', 'Data Berhasil diedit!');
                return redirect()->route('kucing.index');
            }else{
                //redirect dengan pesan error
                Alert::error('Error', 'Data Gagal diedit!');
                return redirect()->route('kucing.index');
            }
    }

    //untuk menghapus data kucing admin
    public function destroy($id)
    {
        $kucing = Kucing::findOrFail($id);
        Storage::disk('local')->delete('public/kucing/'.$kucing->image);
        $kucing->delete();

        if($kucing){
            //redirect dengan pesan sukses
            Alert::success('Sukses', 'Data Berhasil dihapus!');
            return redirect()->route('kucing.index');
        }else{
            //redirect dengan pesan error
            Alert::error('Error', 'Data Gagal dihapus!');
            return redirect()->route('kucing.index');
        }
    }
}

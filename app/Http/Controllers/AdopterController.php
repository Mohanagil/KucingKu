<?php

namespace App\Http\Controllers;
use App\Models\Adopter;
use App\Models\Kucing;
use Alert;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;

class AdopterController extends Controller
{

    //untuk menampilkan halaman adopter admin
   public function index()
   {
       return view('admin.adopter');
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

   //untuk melemparkan data ke datatables
   public function data()
   {
    $adopter = Adopter::query()->with('kucing_data');

    return Datatables::of($adopter)
        ->addIndexColumn()
        ->addColumn('action', function ($user) {
            return '<a href="'.route('adopter.detail',$user->id).'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i>Detail</a>'.'<a href="'.route('adopter.destroy',$user->id).'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-edit"></i> Hapus</a>';
        })
        ->escapeColumns([])
        ->make(true);
    }

    //untuk menghapus data adopter admin
    public function destroy($id)
    {
        $adopter = Adopter::findOrFail($id);
        $adopter->delete();

        if($adopter){
            //redirect dengan pesan sukses
            Alert::success('Sukses', 'Data Berhasil dihapus!');
            return view('admin.adopter');
        }else{
            //redirect dengan pesan error
            Alert::error('Error', 'Data Gagal dihapus!');
            return view('admin.adopter');
        }
    }

    //untuk menampilkan halaman detail data adopter admin
    public function show($id)
    {
        $adopter = Adopter::with('kucing_data')->find($id);
        return view('admin.detail-adopter',compact('adopter'));
    }
}

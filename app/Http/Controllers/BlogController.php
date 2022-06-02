<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Alert;
use Yajra\DataTables\Facades\DataTables;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    //untuk menampilkan halaman index blog
    public function index()
    {
        return view('admin.blog');
    }

    //untuk melemparkan data ke datatables
    public function data(){
        $blog = Blog::query();

        return Datatables::of($blog)
            ->addIndexColumn()
            ->addColumn('action', function ($user) {
                return '<a href="'.route('blog.edit',$user->id).'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>'.'<a href="'.
                route('blog.destroy',$user->id).'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-edit"></i> Hapus</a>';;

            })
            ->editColumn('image', function ($query) {
                return '<img src="'.asset('storage/blog/'.$query->image).'" width="100px" height="100px">';
            })
            ->escapeColumns([])
            ->make(true);
    }

    //untuk menampilkan halaman tambah data blog admin
    public function create()
    {
        return view('admin.tambah-blog');
    }

    //untuk store data blog ke database
    public function store(Request $request)
    {
        $this->validate($request, [
            'image'          => 'required|image|mimes:png,jpg,jpeg',
            'judul'          => 'required',
            'penulis'        => 'required',
            'deskripsi'      => 'required',
        ]);

        //upload foto
        $image = $request->file('image');
        $image->storeAs('public/blog', $image->hashName());

        $blog = Blog::create([
            'image'          => $image->hashName(),
            'judul'          => $request->judul,
            'penulis'        => $request->penulis,
            'deskripsi'      => $request->deskripsi,
        ]);

        if($blog){
            //redirect dengan pesan sukses
            Alert::success('Sukses', 'Data Berhasil ditambahkan!');
            return redirect()->route('blog.index');

        }else{
            //redirect dengan pesan error
            Alert::error('Error', 'Data Gagal ditambahkan!');
            return redirect()->route('blog.index');
        }
    }

     //untuk menampilkan halaman edit data blog admin
     public function edit($id)
     {
         $blog = Blog::find($id);
         return view('admin.edit-blog',compact('blog'));
     }

     //untuk mengupdate data blog admin
     public function update(Request $request,$id)
    {
        $this->validate($request,[
            'judul'          => 'required',
            'penulis'        => 'required',
            'deskripsi'      => 'required',
            ]);

            //get data Blog by id
            $blog = Blog::findOrFail($id);

            if($request->file('image') == ""){

                $blog->update([
                    'judul'          => $request->judul,
                    'penulis'        => $request->penulis,
                    'deskripsi'      => $request->deskripsi,
                ]);
            } else {

                //hapus old image
                Storage::disk('local')->delete('public/blog'.$blog->image);

                //upload new image
                $image = $request->file('image');
                $image->storeAs('public/blog',$image->hashName());

                $blog->update([
                    'image'         => $image->hashName(),
                    'judul'          => $request->judul,
                    'penulis'        => $request->penulis,
                    'deskripsi'      => $request->deskripsi,
                ]);
            }

            if($blog){
                //redirect dengan pesan sukses
                Alert::success('Sukses', 'Data Berhasil diedit!');
                return redirect()->route('blog.index');
            }else{
                //redirect dengan pesan error
                Alert::error('Error', 'Data Gagal diedit!');
                return redirect()->route('blog.index');
            }
    }

    //untuk menghapus data kucing admin
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        Storage::disk('local')->delete('public/blog/'.$blog->image);
        $blog->delete();

        if($blog){
            //redirect dengan pesan sukses
            Alert::success('Sukses', 'Data Berhasil dihapus!');
            return redirect()->route('blog.index');
        }else{
            //redirect dengan pesan error
            Alert::error('Error', 'Data Gagal dihapus!');
            return redirect()->route('blog.index');
        }
    }
}

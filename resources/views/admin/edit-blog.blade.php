@extends('admin.app')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Artikel Blog</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Edit Blog Article</li>
    </ol>
    <form action="{{route('blog.update',$blog->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Judul Artikel</label>
          <input type="text" class="form-control" id="judul" name="judul" aria-describedby="emailHelp" value="{{$blog->judul}}" required="">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Penulis</label>
            <input type="text" class="form-control" id="penulis" name="penulis" aria-describedby="emailHelp" value="{{$blog->penulis}}" required="">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Isi Artikel</label>
            <textarea class="form-control" id="deskrispi" name="deskripsi" rows="5" style="overflow-y: scroll;"required="">{{$blog->deskripsi}}</textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Foto</label>
            <input type="file" class="form-control" id="image" name="image" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
</div>
@endsection

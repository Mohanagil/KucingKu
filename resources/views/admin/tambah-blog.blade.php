@extends('admin.app')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Tambah Artikel Blog</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Add Blog Article</li>
    </ol>
    <form action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data" autocomplete="off">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Judul Artikel</label>
          <input type="text" class="form-control" id="judul" name="judul" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Penulis</label>
            <input type="text" class="form-control" id="penulis" name="penulis" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Isi Artikel</label>
            <textarea class="form-control" id="deskrispi" name="deskripsi" rows="5" style="overflow-y: scroll;"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Foto</label>
            <input type="file" class="form-control" id="image" name="image" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
</div>
@endsection

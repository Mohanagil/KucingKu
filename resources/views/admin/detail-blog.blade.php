@extends('admin.app')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Detail Artikel Blog</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Article Details</li>
    </ol>
    <form enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Judul Artikel</label>
          <input type="text" class="form-control" id="judul" name="judul" aria-describedby="emailHelp" value="{{$blog->judul}}" disabled>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Penulis</label>
            <input type="text" class="form-control" id="penulis" name="penulis" aria-describedby="emailHelp" value="{{$blog->penulis}}" disabled>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Isi Artikel</label>
            <textarea class="form-control" id="deskrispi" name="deskripsi" rows="5" style="overflow-y: scroll;" disabled>{{$blog->deskripsi}}</textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Foto</label><br>
            <img src= {{asset('storage/blog/'.$blog->image)}} width="800px" height="500px">
        </div>
      </form>
</div>
@endsection

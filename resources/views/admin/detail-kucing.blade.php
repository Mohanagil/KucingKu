@extends('admin.app')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Detail Data Kucing</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Cat Details</li>
    </ol>
    <form enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" value="{{$kucing->nama}}" disabled>
          </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Ras </label>
          <input type="text" class="form-control" id="ras" name="ras" aria-describedby="emailHelp" value="{{$kucing->ras}}" disabled>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Umur</label>
            <input type="text" class="form-control" id="umur" name="umur" aria-describedby="emailHelp" value="{{$kucing->umur}}" disabled>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Berat (Kg)</label>
            <input type="text" class="form-control" id="berat" name="berat" aria-describedby="emailHelp" disabled value="{{$kucing->berat}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
            <input type="text" class="form-control" id="berat" name="berat" aria-describedby="emailHelp" value="{{$kucing->jenis_kelamin}}" disabled>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskrispi" name="deskripsi" rows="5" style="overflow-y: scroll;" disabled>{{$kucing->deskripsi}}</textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Foto</label><br>
            <img src= {{asset('storage/kucing/'.$kucing->image)}} width="800px" height="500px">
        </div>
      </form>
</div>
@endsection

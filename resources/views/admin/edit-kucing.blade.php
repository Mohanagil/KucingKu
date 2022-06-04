@extends('admin.app')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Data Kucing</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Edit Cat Data</li>
    </ol>
    <form action="{{route('kucing.update',$kucing->id)}}" method="POST" enctype="multipart/form-data" autocomplete="off">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama </label>
            <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" value="{{$kucing->nama}}" required="">
          </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Ras </label>
          <input type="text" class="form-control" id="ras" name="ras" aria-describedby="emailHelp" value="{{$kucing->ras}}" required="">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Umur</label>
            <input type="text" class="form-control" id="umur" name="umur" aria-describedby="emailHelp" value="{{$kucing->umur}}" required="">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Berat (Kg)</label>
            <input type="text" class="form-control" id="berat" name="berat" aria-describedby="emailHelp" value="{{$kucing->berat}}" required="">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
            <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                <option disabled>Pilih Jenis Kelamin</option>
                <option {{$kucing->jenis_kelamin == 'jantan'  ? 'selected' : ''}} value="Jantan">Jantan</option>
                <option {{$kucing->jenis_kelamin == 'betina'  ? 'selected' : ''}} value="Betina">Betina</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskrispi" name="deskripsi" rows="5" style="overflow-y: scroll;"required="">{{$kucing->deskripsi}}</textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Foto</label>
            <input type="file" class="form-control" id="image" name="image" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
</div>
@endsection

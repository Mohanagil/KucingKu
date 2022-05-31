@extends('admin.app')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Tambah Data Kucing</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Add Cat Data</li>
    </ol>
    <form action="{{route('kucing.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Ras </label>
          <input type="ras" class="form-control" id="ras" name="ras" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Umur</label>
            <input type="umur" class="form-control" id="umur" name="umur" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Berat (Kg)</label>
            <input type="berat" class="form-control" id="berat" name="berat" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
            <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                <option selected disabled>Pilih Jenis Kelamin</option>
                <option value="jantan">Jantan</option>
                <option value="betina">Betina</option>
              </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Foto</label>
            <input type="file" class="form-control" id="image" name="image" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
</div>
@endsection

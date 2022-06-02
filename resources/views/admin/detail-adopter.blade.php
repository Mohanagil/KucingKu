@extends('admin.app')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Detail Data Adopter</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Adopter Details</li>
    </ol>
    <form enctype="multipart/form-data">
        @csrf
        @method('PUT')
        {{-- @dd($adopter) --}}
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama Adopter</label>
          <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" value="{{$adopter->nama}}" disabled>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="penulis" name="penulis" aria-describedby="emailHelp" value="{{$adopter->alamat}}" disabled>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">No KTP</label>
            <input type="text" class="form-control" id="penulis" name="penulis" aria-describedby="emailHelp" value="{{$adopter->no_ktp}}" disabled>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">No Handphone</label>
            <input type="text" class="form-control" id="penulis" name="penulis" aria-describedby="emailHelp" value="{{$adopter->no_hp}}" disabled>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="text" class="form-control" id="penulis" name="penulis" aria-describedby="emailHelp" value="{{$adopter->email}}" disabled>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Profesi</label>
            <input type="text" class="form-control" id="penulis" name="penulis" aria-describedby="emailHelp" value="{{$adopter->profesi}}" disabled>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Sosial Media</label>
            <input type="text" class="form-control" id="penulis" name="penulis" aria-describedby="emailHelp" value="{{$adopter->sosmed}}" disabled>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Kucing yang diajukan</label>
            <input type="text" class="form-control" id="penulis" name="penulis" aria-describedby="emailHelp" value="{{$adopter->kucing_data->nama}}" disabled>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Foto</label><br>
            <img src= {{asset('storage/kucing/'.$adopter->kucing_data->image)}} width="800px" height="500px">
        </div>
      </form>
</div>
@endsection

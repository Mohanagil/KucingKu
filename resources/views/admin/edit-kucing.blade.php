@extends('admin.app')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Data Kucing</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Edit Cat Data</li>
    </ol>
    <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Ras </label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Umur</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Berat (Kg)</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
            <select class="form-select" aria-label="Default select example" required>
                <option selected disabled>Pilih Jenis Kelamin</option>
                <option value="1">Jantan</option>
                <option value="2">Betina</option>
              </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Foto</label>
            <input type="file" class="form-control" id="image" name="image" aria-describedby="emailHelp" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
</div>
@endsection

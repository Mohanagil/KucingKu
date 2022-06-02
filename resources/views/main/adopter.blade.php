@extends('main.app')
@section('content')
<!-- Contact Start -->
<div class="container-fluid pt-5">
    <div class="d-flex flex-column text-center mb-5">
        <h5 class="text-primary mb-3">Adopter</h5>
    </div>
    <div class="row">
        <div class="col-12 p-0">
            <iframe style="width: 100%; height: 100px;" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="col-12">
            <div class="contact-form bg-white">
                <div id="success"></div>
                <form action="{{route('adopter.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                      <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" required="">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Alamat Rumah</label>
                      <input type="text" class="form-control" id="alamat" name="alamat" required="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nomor KTP</label>
                        <input type="text" class="form-control" id="no_ktp" name="no_ktp" required="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nomor HP</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp" required="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Alamat Email</label>
                        <input type="email" class="form-control" id="email" name="email" required="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Profesi</label>
                        <input type="text" class="form-control" id="profesi" name="profesi" required="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Sosial Media (FB/IG)</label>
                        <input type="text" class="form-control" id="sosmed" name="sosmed" required="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Pilih Kucing</label>
                        <select class="form-control" aria-label="Default select example" name="kucing" id="kucing">
                            <option selected disabled value="">Pilih Kucing</option>
                            @foreach ($kucing as $cat)
                            <option value="{{$cat->id}}">{{$cat->nama}} - {{$cat->ras}}</option>
                            @endforeach
                        </select>
                    </div>
                    <label for="exampleInputPassword1" class="form-label">Syarat dan Ketentuan</label>
                    <div class="mb-3" style="overflow: scroll; height: 120px">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required="">
                        <label class="form-check-label" for="exampleCheck1">Saya Telah Membaca Syarat dan Ketentuan</label>
                    </div>
                    <button type="submit" class="btn btn-success">Ajukan</button>
                  </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection

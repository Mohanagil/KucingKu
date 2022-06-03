@extends('main.app')
@section('content')
<!-- Detail Start -->
<div class="container py-5">
    <div class="row">
        <div class="col-lg-8">
            <div class="d-flex flex-column text-left mb-4">
                <h5 class="text-primary mb-3">Detail Kucing</h5>
                <h1 class="mb-3">{{$kucing->nama}}-{{$kucing->ras}}</h1>
            </div>

            <div class="mb-5">
                <img class="img-thumbnail mb-4 p-3" src="{{asset('storage/kucing/'.$kucing->image)}}" alt="Image">
                <h6>Nama : {{$kucing->nama}} </h6>
                <h6>Ras : {{$kucing->ras}} </h6>
                <h6>Umur : {{$kucing->umur}} </h6>
                <h6>Berat : {{$kucing->berat}} kg </h6>
                <h6>Jenis Kelamin : {{$kucing->jenis_kelamin}} </h6>
                <p style="text-align: justify; white-space: pre-wrap;">{{$kucing->deskripsi}}</p>
            </div>

            <div class="media bg-primary text-white mb-4 p-4 p-md-5">
                <img src="{{asset('img/please.png')}}" alt="Image" class="mr-4 bg-primary" style="width:100px;">
                <div class="media-body">
                    <h5 class="mb-3">Tertarik Dengan Kucing Ini?</h5>
                    <p class="m-0">Ayo salurkan bantuan mu dengan ajukan adopsi :D</p>
                    <br>
                    <a href="{{route('main.adopt')}}" class="btn btn-success"  id="sendMessageButton">Ajukan Adopsi</a>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<!-- Detail End -->
@endsection

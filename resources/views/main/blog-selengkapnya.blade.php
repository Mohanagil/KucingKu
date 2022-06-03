@extends('main.app')
@section('content')
<!-- Detail Start -->
<div class="container py-5">
    <div class="row">
        <div class="col-lg-8">
            <div class="d-flex flex-column text-left mb-4">
                <h5 class="text-primary mb-3">Blog Detail</h5>
                <h1 class="mb-3">{{$blog->judul}}</h1>
                <div class="d-index-flex mb-2">
                    <span class="mr-3"><i class="fa fa-user text-primary"></i> {{$blog->penulis}}</span>
                    <span class="mr-3"><i class="fa fa-clock text-primary"></i> {{$blog->created_at}}</span>
                </div>
            </div>

            <div class="mb-5">
                <img class="img-thumbnail mb-4 p-3" src="{{asset('storage/blog/'.$blog->image)}}" alt="Image">
                <p style="text-align: justify; white-space: pre-wrap;">{{$blog->deskripsi}}</p>
            </div>
        </div>
    </div>
</div>
<!-- Detail End -->
@endsection

@extends('main.app')
@section('content')
 <!-- Blog Start -->
 <div class="container pt-5">
    <div class="d-flex flex-column text-center mb-5">
        <h5 class="text-primary mb-3">Blog Artikel</h5>
        <h1 class="m-0">yang terbaru di KucingKu</h1>
    </div>
    @foreach ($blog->chunk(3) as $chunk)
        <div class="row">
        @foreach ($chunk as $blogs)
        <div class="col-lg-4 mb-4">
            <div class="card mb-2 p-3">
                <img class="card-img-top" style="width: 316px;height: 237px;" src="{{asset('storage/blog/'.$blogs->image)}}" alt="">
                <div class="card-body bg-secondary d-flex align-items-center p-0">
                    <h6 class="card-title text-white text-truncate m-0 ml-3">{{$blogs->judul}}</h6>
                    <a href="" style="width: 45px; height: 45px;"></a>
                </div>
                <div class="card-footer py-3 px-4">
                    <div class="d-flex mb-2">
                        <small class="mr-3"><i class="fa fa-user text-primary"></i>{{$blogs->penulis}}</small>
                    </div>
                    <p class="m-0" >{{substr($blogs->deskripsi, 0,  150)}}...<a href="{{route('main.blog_selengkapnya',$blogs->id)}}"> Selengkapnya</a></p>
                </div>
            </div>
        </div>
        @endforeach
        </div>
    @endforeach
        <div class="col-lg-12">
            <nav aria-label="Page navigation">
              <ul class="pagination justify-content-center mb-4">
                {!! $blog->links() !!}
              </ul>
            </nav>
        </div>
</div>
<!-- Blog End -->
@endsection

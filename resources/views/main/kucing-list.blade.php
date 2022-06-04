@extends('main.app')
@section('content')
<!-- List Start -->
<div class="container pt-5">
    <div class="d-flex flex-column text-center mb-5">
        <h5 class="text-primary mb-3">Data Kucing</h5>
        <h1 class="m-0">List Kucing di KucingKu</h1>
    </div>
    @foreach ($kucing->chunk(3) as $chunk)
        <div class="row">
        @foreach ($chunk as $cat)
        <div class="col-lg-4 mb-4">
            <div class="card mb-2 p-3">
                <img href="{{route('main.kucing_selengkapnya',$cat->id)}}" class="card-img-top" style="width: 316px;height: 237px;" src="{{asset('storage/kucing/'.$cat->image)}}" alt="">
                <div href="{{route('main.kucing_selengkapnya',$cat->id)}}" class="card-body bg-secondary d-flex align-items-center p-0">
                    <h6 class="card-title text-white text-truncate m-0 ml-3">{{$cat->nama}} - {{$cat->ras}}</h6>
                    <a href="{{route('main.kucing_selengkapnya',$cat->id)}}" style="width: 45px; height: 45px;" ></a>
                </div>
                <div class="card-footer py-3 px-4" href="{{route('main.kucing_selengkapnya')}}" >
                    <p class="m-0" >{{substr($cat->deskripsi, 0,  150)}}...<a href="{{route('main.kucing_selengkapnya',$cat->id)}}"> Selengkapnya</a></p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach
        <div class="col-lg-12">
            <nav aria-label="Page navigation">
              <ul class="pagination justify-content-center mb-4">
                {!! $kucing->links() !!}
              </ul>
            </nav>
        </div>
    </div>
</div>
<!-- List End -->
@endsection

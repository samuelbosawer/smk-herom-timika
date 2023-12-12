@extends('front.layout.tamplate')
@section('title')
Beranda - {{$pengaturan->nama_web}}
@endsection
@section('content')
@include('front.include.hero')

<section class="blog-listings">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 order-lg-1">
                <h1>Berita Terbaru</h1>
                <div class="row">
                    <p class="col-lg-8">Berita terbaru SMKS Hermon Mimika</p>
                </div>
                <div class="row mt-5">
                    @foreach ($berita as $b )
                    <div class="col-md-6">
                        <div class="blog-post ">
                            <div class="bg-gray image text-center "><img src="{{asset($b->cover)}}" width="100%" class="img-fluid" alt="{{$b->judul}}">
                                <div class="overlay d-flex align-items-center justify-content-center"><a href="{{url('/berita', $b->slug)}}" class="btn btn-outline-light">Baca selengkapnya</a></div>
                            </div>
                            <div class="text bg-gray"><a href="{{url('/berita', $b->slug)}}">
                                    <h5 class="text-this">{{$b->judul}}</h5>
                                </a>
                                <ul class="post-meta list-inline">
                                    <li class="list-inline-item"><i class="icon-clock-1"></i> {{ $b->created_at->isoFormat('dddd, D MMMM Y'); }}</li>
                                    <li class="list-inline-item text-primary"> <i class="fa fa-bookmark mr-0"></i><a href="{{url('/kategori',$b->kategori->slug)}}"><i class="fas fa-ad"></i> {{ $b->kategori->nama }}</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>

            <div class="col-lg-8 order-lg-3">
                <h1>Foto Terbaru</h1>
                <div class="row">
                    <p class="col-lg-8">Foto terbaru SMKS Hermon Mimika</p>
                </div>
                <div class="row mt-5">
                    @foreach ($foto as $f )
                    <div class="col-md-6">
                        <div class="blog-post">
                            <div class="image"><img src="{{asset($f->foto)}}" width="100%" alt="{{$f->judul_foto}}">
                                @if ($f->link_foto != null)
                                <div class="overlay d-flex align-items-center justify-content-center"><a href="{{$f->link_foto}}" class="btn btn-outline-light"> Link Foto</a></div>
                                @endif
                            </div>
                            <div class="text bg-gray"><a href="#">
                                    <h5 class="text-this">{{$f->judul_foto}}</h5>
                                </a>
                                <ul class="post-meta list-inline">
                                    <li class="list-inline-item"><i class="icon-clock-1"></i> {{ $f->created_at->isoFormat('dddd, D MMMM Y'); }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>


            <div class="col-lg-8 order-lg-4">
                <h1>Video Terbaru</h1>
                <div class="row">
                    <p class="col-lg-8">Video terbaru SMKS Hermon Mimika</p>
                </div>
                <div class="row mt-5">
                    @foreach ($video as $v )

                    <div class="col-md-6">
                        <div class="blog-post">
                            <div class="image">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/{!!$v->link_video!!}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                {{-- <div class="overlay d-flex align-items-center justify-content-center"><a href="{{$v->link_video}}" class="btn btn-outline-light">Lihat Video Full</a>
                            </div> --}}
                        </div>
                        <div class="text bg-gray"><a href="{{$v->link_video}}">
                                <h4 class="text-this">{{$v->judul_video}}</h4>
                            </a>
                            <ul class="post-meta list-inline">
                                <li class="list-inline-item"><i class="icon-clock-1"></i> {{ $v->created_at->isoFormat('dddd, D MMMM Y'); }}</li>

                            </ul>
                        </div>
                    </div>
                </div>

                @endforeach


            </div>
        </div>

        <div class="col-lg-4 order-lg-2">
            <!-- sidebar-->
            @include('front.include.sidebar')
        </div>




    </div>
    </div>
</section>
@endsection
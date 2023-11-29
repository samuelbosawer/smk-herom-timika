@extends('front.layout.tamplate')
@section('title')
    Video Kegiatan Sekolah
 @endsection
@section('content')

<!-- Hero Section-->
<section class="hero hero-page">
    <div style="background: url(assets-visitor/img/courses-banner.jpg)" class="hero-banner">       </div>
</section>


 <!-- News Section-->
 <section class="latest-news">
    <div class="container">
        <nav aria-label="breadcrumb" role="navigation">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/beranda')}}">Beranda</a></li>
            <li aria-current="page" class="breadcrumb-item active">Video</li>
          </ol>
        </nav>
    </div>
    <div class="container">
      <header class="text-center">
        <h2> Video Kegiatan Sekolah</h2>
      </header>

      <div class="row">
        <div class="col-lg-12 ">
            <div class="row mt-5">

              @foreach ($data as $v )
              <div class="col-md-6">
                <div class="blog-post">
                <div class="image">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/{!!$v->link_video!!}"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                    {{-- <div class="overlay d-flex align-items-center justify-content-center"><a href="{{$v->link_video}}" class="btn btn-outline-light">Lihat Video Full</a></div> --}}
                </div>
                <div class="text bg-gray"><a href="{{$v->link_video}}">
                    <h4 class="text-this">{{$v->judul_video}}</h4></a>
                    <ul class="post-meta list-inline">
                    <li class="list-inline-item"><i class="icon-clock-1"></i> {{ $v->created_at->isoFormat('dddd, D MMMM Y'); }}</li>

                    </ul>
                </div>
                </div>
            </div>

              @endforeach


            </div>
        </div>
      </div>


  </section>
@endsection


@extends('front.layout.tamplate')
@section('title')
    Foto Kegiatan Sekolah
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
            <li aria-current="page" class="breadcrumb-item active">Foto</li>
          </ol>
        </nav>
    </div>
    <div class="container">
      <header class="text-center">
        <h2> Foto Kegiatan Sekolah</h2>
      </header>

      <div class="row">
        <div class="col-lg-12 ">
            <div class="row mt-5">
                @foreach ($data as $d )
                      <div class="col-md-4">
                        <div class="blog-post">
                        <div class="image"><img src="{{asset($d->foto)}}" width="100%" alt="{{$d->judul_foto}}">
                            @if ($d->link_foto != null)
                                <div class="overlay d-flex align-items-center justify-content-center"><a href="{{$d->link_foto}}" class="btn btn-outline-light"> Link Foto</a></div>
                            @endif
                        </div>
                        <div class="text bg-gray"><a href="#">
                            <h4 class="text-this">{{$d->judul_foto}} </h4></a>
                            <ul class="post-meta list-inline">
                            <li class="list-inline-item"><i class="icon-clock-1"></i> {{ $d->created_at->isoFormat('dddd, D MMMM Y'); }}</li>
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


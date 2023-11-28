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
              <div class="col-md-3">
                <div class="blog-post">
                  <div class="image"><img src="assets-visitor/img/blog-img.jpg" alt="Projects aim to help those experiencing mental">
                    <div class="overlay d-flex align-items-center justify-content-center"><a href="#" class="btn btn-outline-light"> Link Foto</a></div>
                  </div>
                  <div class="text bg-gray"><a href="blog-post.html">
                      <h4 class="text-this">Projects aim to help those experiencing mental</h4></a>
                    <ul class="post-meta list-inline">
                      <li class="list-inline-item"><i class="icon-clock-1"></i> 14 August 2017</li>
                      {{-- <li class="list-inline-item"><i class="icon-chat"></i>340</li> --}}
                    </ul>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="blog-post">
                  <div class="image"><img src="assets-visitor/img/blog-img.jpg" alt="Projects aim to help those experiencing mental">
                    <div class="overlay d-flex align-items-center justify-content-center"><a href="#" class="btn btn-outline-light"> Link Foto</a></div>
                  </div>
                  <div class="text bg-gray"><a href="blog-post.html">
                      <h4 class="text-this">Projects aim to help those experiencing mental</h4></a>
                    <ul class="post-meta list-inline">
                      <li class="list-inline-item"><i class="icon-clock-1"></i> 14 August 2017</li>
                      {{-- <li class="list-inline-item"><i class="icon-chat"></i>340</li> --}}
                    </ul>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>


  </section>
@endsection


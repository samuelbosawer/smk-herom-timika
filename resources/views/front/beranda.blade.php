@extends('front.layout.tamplate')
@section('title')
    Beranda -  {{$pengaturan->nama_web}}
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
                        <div class="overlay d-flex align-items-center justify-content-center"><a href="{{url('/berita', $b->slug)}}" class="btn btn-outline-light">Read More</a></div>
                    </div>
                    <div class="text bg-gray"><a href="{{url('/berita', $b->slug)}}">
                        <h4 class="text-this">{{$b->judul}}</h4></a>
                        <ul class="post-meta list-inline">
                        <li class="list-inline-item"><i class="icon-clock-1"></i> 14 August 2017</li>
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
              <div class="col-md-6">
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
              <div class="col-md-6">
                  <div class="blog-post">
                    <div class="image"><img src="assets-visitor/img/blog-img.jpg" alt="Projects aim to help those experiencing mental">
                      {{-- <div class="overlay d-flex align-items-center justify-content-center"><a href="blog-post.html" class="btn btn-outline-light">Read More</a></div> --}}
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
              <div class="col-md-6">
                  <div class="blog-post">
                    <div class="image"><img src="assets-visitor/img/blog-img.jpg" alt="Projects aim to help those experiencing mental">
                      {{-- <div class="overlay d-flex align-items-center justify-content-center"><a href="blog-post.html" class="btn btn-outline-light">Read More</a></div> --}}
                    </div>
                    <div class="text bg-gray"><a href="blog-post.html">
                        <h4 class="text-this">Projects aim to help those experiencing mental</h4></a>
                      <ul class="post-meta list-inline">
                        <li class="list-inline-item"><i class="icon-clock-1"></i> 14 August 2017</li>
                        {{-- <li class="list-inline-item"><i class="icon-chat"></i>340</li> --}}
                      </ul>
                      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="blog-post">
                    <div class="image"><img src="assets-visitor/img/blog-img.jpg" alt="Projects aim to help those experiencing mental">
                      <div class="overlay d-flex align-items-center justify-content-center"><a href="blog-post.html" class="btn btn-outline-light">Link Foto</a></div>
                    </div>
                    <div class="text bg-gray"><a href="blog-post.html">
                        <h4 class="text-this">Projects aim to help those experiencing mental</h4></a>
                      <ul class="post-meta list-inline">
                        <li class="list-inline-item"><i class="icon-clock-1"></i> 14 August 2017</li>
                        {{-- <li class="list-inline-item"><i class="icon-chat"></i>340</li> --}}
                      </ul>
                      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                    </div>
                  </div>
                </div>
            </div>
        </div>


        <div class="col-lg-8 order-lg-4">
            <h1>Video Terbaru</h1>
            <div class="row">
              <p class="col-lg-8">Video terbaru SMKS Hermon Mimika</p>
            </div>
            <div class="row mt-5">
              <div class="col-md-6">
                <div class="blog-post">
                  <div class="image"><img src="assets-visitor/img/blog-img.jpg" alt="Projects aim to help those experiencing mental">
                    <div class="overlay d-flex align-items-center justify-content-center"><a href="blog-post.html" class="btn btn-outline-light">Lihat Video Full</a></div>
                  </div>
                  <div class="text bg-gray"><a href="blog-post.html">
                      <h4 class="text-this">Projects aim to help those experiencing mental</h4></a>
                    <ul class="post-meta list-inline">
                      <li class="list-inline-item"><i class="icon-clock-1"></i> 14 August 2017</li>
                      {{-- <li class="list-inline-item"><i class="icon-chat"></i>340</li> --}}
                    </ul>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                  <div class="blog-post">
                    <div class="image"><img src="assets-visitor/img/blog-img.jpg" alt="Projects aim to help those experiencing mental">
                      <div class="overlay d-flex align-items-center justify-content-center"><a href="blog-post.html" class="btn btn-outline-light">Lihat Video Full</a></div>
                    </div>
                    <div class="text bg-gray"><a href="blog-post.html">
                        <h4 class="text-this">Projects aim to help those experiencing mental</h4></a>
                      <ul class="post-meta list-inline">
                        <li class="list-inline-item"><i class="icon-clock-1"></i> 14 August 2017</li>
                        {{-- <li class="list-inline-item"><i class="icon-chat"></i>340</li> --}}
                      </ul>
                      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                    </div>
                  </div>
                </div>
              <div class="col-md-6">
                  <div class="blog-post">
                    <div class="image"><img src="assets-visitor/img/blog-img.jpg" alt="Projects aim to help those experiencing mental">
                      <div class="overlay d-flex align-items-center justify-content-center"><a href="blog-post.html" class="btn btn-outline-light">Lihat Video Full</a></div>
                    </div>
                    <div class="text bg-gray"><a href="blog-post.html">
                        <h4 class="text-this">Projects aim to help those experiencing mental</h4></a>
                      <ul class="post-meta list-inline">
                        <li class="list-inline-item"><i class="icon-clock-1"></i> 14 August 2017</li>
                        {{-- <li class="list-inline-item"><i class="icon-chat"></i>340</li> --}}
                      </ul>
                      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="blog-post">
                    <div class="image"><img src="assets-visitor/img/blog-img.jpg" alt="Projects aim to help those experiencing mental">
                      <div class="overlay d-flex align-items-center justify-content-center"><a href="blog-post.html" class="btn btn-outline-light">Lihat Video Full</a></div>
                    </div>
                    <div class="text bg-gray"><a href="blog-post.html">
                        <h4 class="text-this">Projects aim to help those experiencing mental</h4></a>
                      <ul class="post-meta list-inline">
                        <li class="list-inline-item"><i class="icon-clock-1"></i> 14 August 2017</li>
                        {{-- <li class="list-inline-item"><i class="icon-chat"></i>340</li> --}}
                      </ul>
                      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                    </div>
                  </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 order-lg-2">
            <!-- sidebar-->
            <div class="blog-sidebar">
              <div class="widget search">
                <div class="widget-header"><strong>Search</strong></div>
                <div class="widget-body">
                  <form action="#">
                    <div class="form-group mb-0">
                      <input type="search" placeholder="Enter your keyword">
                      <button type="submit"> <i class="fa fa-search"></i></button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="widget social border-0 pd-0">
                <ul class="social-buttons list-unstyled">
                  <li><a href="{{$pengaturan->facebook}}" class="facebook d-flex" target="_blank">
                      <div class="icon">                   <i class="fa fa-facebook"></i></div>
                      <div class="text d-flex justify-content-between">
                        <div class="right"><strong>Facebook</strong></div>
                      </div></a></li>



               <li><a href="{{$pengaturan->youtube}}" class="youtube d-flex mb-0" target="_blank">
                      <div class="icon">                   <i class="fa fa-youtube-play"></i></div>
                      <div class="text d-flex justify-content-between">
                        <div class="right"><strong>Youtube</strong></div>
                      </div></a></li>
                </ul>

              </div>
              <div class="widget categoris">
                <div class="widget-header"><strong>Kategori</strong></div>
                <div class="widget-body">
                  <ul class="categoris-list list-unstyled">
                    @foreach ($kategori as $k )
                        <li><a href="{{url('kategori',$k->slug)}}" class="d-flex align-items-end justify-content-between"> {{$k->nama}} </a></li>
                    @endforeach
                  </ul>
                </div>
              </div>

            </div>
        </div>




      </div>
    </div>
  </section>
@endsection


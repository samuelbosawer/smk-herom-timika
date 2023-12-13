@extends('front.layout.tamplate')
@section('title')
    Kategori {{ $id }}
@endsection
@section('content')
    <section class="hero hero-page">
        <div style="background: url(/assets-visitor/img/blog-banner.jpg)" class="hero-banner"> </div>
    </section>
    <!-- Blog Listings-->
    <section class="blog-listings">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/beranda') }}">Beranda</a></li>
                            <li aria-current="page" class="breadcrumb-item active">Kategori</li>
                        </ol>
                    </nav>
                    <h4>Kategori {{ $id }} </h4>
                    <div class="row">
                        <p class="col-lg-8">Berita {{ $pengaturan->nama_web }}</p>
                    </div>
                    <div class="row mt-5">
                        @foreach ($data as $b)
                            <div class="col-md-6">
                                <div class="blog-post ">
                                    <div class="bg-gray image text-center "><img src="{{ asset($b->cover) }}" width="100%"
                                            class="img-fluid" alt="{{ $b->judul }}">
                                        <div class="overlay d-flex align-items-center justify-content-center"><a
                                                href="{{ url('/berita', $b->slug) }}" class="btn btn-outline-light">Baca
                                                selengkapnya</a></div>
                                    </div>
                                    <div class="text bg-gray"><a href="{{ url('/berita', $b->slug) }}">
                                            <h5 class="text-this">{{ $b->judul }}</h5>
                                        </a>
                                        <ul class="post-meta list-inline">
                                            <li class="list-inline-item"><i class="icon-clock-1"></i>
                                                {{-- {{ $b->created_at->isoFormat('dddd, D MMMM Y') }} --}}
                                                {{ Carbon\Carbon::parse($b->created_at)->isoFormat('dddd, D MMMM Y') }}

                                            </li>
                                            <li class="list-inline-item text-primary"> <i class="fa fa-bookmark mr-0"></i><a
                                                    href="{{ url('/kategori', $b->slug) }}"><i class="fas fa-ad"></i>
                                                    {{ $b->nama }}</a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    <h4>Berita Lainnya</h4>
                    <div class="row mt-5">
                        @foreach ($berita as $b)
                            <div class="col-md-6">
                                <div class="blog-post ">
                                    <div class="bg-gray image text-center "><img src="{{ asset($b->cover) }}"
                                            width="100%" class="img-fluid" alt="{{ $b->judul }}">
                                        <div class="overlay d-flex align-items-center justify-content-center"><a
                                                href="{{ url('/berita', $b->slug) }}" class="btn btn-outline-light">Baca
                                                selengkapnya</a></div>
                                    </div>
                                    <div class="text bg-gray"><a href="{{ url('/berita', $b->slug) }}">
                                            <h5 class="text-this">{{ $b->judul }}</h5>
                                        </a>
                                        <ul class="post-meta list-inline">
                                            <li class="list-inline-item"><i class="icon-clock-1"></i>
                                                {{-- {{ $b->created_at->isoFormat('dddd, D MMMM Y') }} --}}
                                                {{ Carbon\Carbon::parse($b->created_at)->isoFormat('dddd, D MMMM Y') }}

                                            </li>
                                            <li class="list-inline-item text-primary"> <i class="fa fa-bookmark mr-0"></i><a
                                                    href="{{ url('/kategori', $b->slug) }}"><i class="fas fa-ad"></i>
                                                    {{ $b->nama }}</a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>
                <div class="col-lg-4">
                    <!-- sidebar-->
                    @include('front.include.sidebar')
                </div>
            </div>
        </div>
    </section>
@endsection

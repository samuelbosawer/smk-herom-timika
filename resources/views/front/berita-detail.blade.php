@extends('front.layout.tamplate')
@section('title')
    Berita
@endsection
@section('content')
    <section class="hero hero-page">
        <div style="background: url(/assets-visitor/img/blog-banner.jpg)" class="hero-banner"> </div>
    </section>
    <section class="blogpost-full">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/beranda') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('/berita') }}">Berita</a></li>
                            <li aria-current="page" class="breadcrumb-item active">{{ $data->judul }}</li>
                        </ol>
                    </nav>
                    <h3 class="mb-3"> {{ $data->judul }} </h3>
                    <div class="post-meta d-flex align-items-center flex-wrap">
                        <div class="date"><i
                                class="fa fa-calendar"></i>{{ $data->created_at->isoFormat('dddd, D MMMM Y') }} </div>
                        <div class="comments"> <i class="fa fa-bookmark"></i>{{ $data->kategori->nama }}</div>
                    </div>
                    <p><img src="{{ asset($data->cover) }}" alt="{{ $data->judul }}" class="img-fluid"></p>

                    <div class="text-content">
                        {!! $data->isi !!}
                    </div>
                    <div class="post-footer mt-5">
                        <div class="row">
                            <div class="col-lg-12 d-flex flex-wrap align-items-center">
                                <ul class="social-buttons list-inline mb-0">
                                    <li class="list-inline-item"><a
                                            href="https://www.twitter.com/share?&url={{ Request::url() }}"
                                            class="twitter d-flex mb-0">
                                            <div class="icon"> <i class="fa fa-twitter"></i></div>
                                            <div class="text text-enter"><strong>Share Post</strong></div>
                                        </a></li>

                                    <li class="list-inline-item"><a
                                            href="https://www.facebook.com/share.php?u={{ Request::url() }}"
                                            class="facebook d-flex mb-0">
                                            <div class="icon"> <i class="fa fa-facebook"></i></div>
                                            <div class="text text-enter"><strong>Share Post</strong></div>
                                        </a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    >
                </div>
                <div class="col-lg-4">
                    <!-- sidebar-->
                    @include('front.include.sidebar')
                </div>
            </div>
    </section>
@endsection

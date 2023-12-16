@extends('front.layout.tamplate')
@section('title')
    Prestasi Sekolah
@endsection
@section('content')
    <!-- Hero Section-->
    <section class="hero hero-page">
        <div style="background: url(assets-visitor/img/courses-banner.jpg)" class="hero-banner"> </div>
    </section>


    <!-- News Section-->
    <section class="latest-news">
        <div class="container">
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/beranda') }}">Beranda</a></li>
                    <li aria-current="page" class="breadcrumb-item active">Prestasi</li>
                </ol>
            </nav>
        </div>
        <div class="container">
            <header class="text-center">
                <h2> Prestasi Sekolah</h2>
            </header>

            <div class="row">
                @foreach ($data as $d)
                    <div class="col-lg-4">
                        <div class="news-block">
                            <div class="news-block-inner bg-gray"><small
                                    class="text-transform">{{ Carbon\Carbon::parse($d->tangga_prestasi)->isoFormat('D MMMM Y') }}</small>
                                <h4>{{ $d->nama_prestasi }}</h4>
                                <p>{{ $d->keterangan }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
    </section>
@endsection

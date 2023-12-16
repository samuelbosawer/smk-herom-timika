@extends('front.layout.tamplate')
@section('title')
    Jurusan
@endsection
@section('content')
    <!-- Hero Section-->
    <section class="hero hero-page">
        <div style="background: url(/assets-visitor/img/courses-banner.jpg)" class="hero-banner"> </div>
    </section>

    <section>
        <div class="container">
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/beranda') }}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#">Jurusan</a></li>
                    <li aria-current="page" class="breadcrumb-item active">{{ $data->nama_jurusan }}</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-xl-8 text-content">
                    <h2 class="mb-4">{{ $data->nama_jurusan }} </h2>
                    {!! $data->profil_jurusan !!}
                </div>
                <div class="col-xl-4 text-content">
                    @include('front.include.sidebar')
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection

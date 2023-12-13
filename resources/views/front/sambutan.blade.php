@extends('front.layout.tamplate')
@section('title')
    Sambutan Kepala Sekolah
@endsection
@section('content')
    <!-- Hero Section-->
    <section class="hero hero-page">
        <div style="background: url(assets-visitor/img/courses-banner.jpg)" class="hero-banner"> </div>
    </section>

    <section>
        <div class="container">
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/beranda') }}">Beranda</a></li>
                    <li aria-current="page" class="breadcrumb-item active">Sambutan Kepala Sekolah</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-xl-8 text-content">
                    <h1 class="mb-4">Sambutan Kepala Sekolah </h1>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection

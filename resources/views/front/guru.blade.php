@extends('front.layout.tamplate')
@section('title')
    Guru
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
                    <li aria-current="page" class="breadcrumb-item active"> Guru & Staf</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-xl-8 text-content">
                    <h1 class="mb-4">Guru & Staf </h1>
                </div>

            </div>
        </div>

    </section>

    <!-- Staff Section-->
    <section class="staff bg-gray">
        <div class="container">
            <div class="row">
                @foreach ($data as $d)
                    <div class="col-lg-4">
                        <div class="staff-member">
                            <img src="{{ asset($d->foto_guru) }}" alt="{{ $d->nama_guru }}">
                            <div class="info">
                                <h3 class="h5 teacher mb-0">{{ $d->nama_guru }}</h3>
                                <span>{{ $d->jabatan_guru }}</span>
                            </div>
                            <div class="overlay d-flex align-items-center justify-content-center">
                                <div class="overlay-inner">
                                    <p class="teacher-quote"> </p><a href="staff-detail.html" class="teacher-name">
                                        <h3 class="h5 mb-0 teacher">{{ $d->nama_guru }}</h3>
                                    </a><span class="teacher-field">{{ $d->jabatan_guru }}</span>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection

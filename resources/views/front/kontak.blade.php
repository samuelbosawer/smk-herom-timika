@extends('front.layout.tamplate')
@section('title')
    Kontak
@endsection
@section('content')
    <section class="hero hero-page">
        <div style="background: url(assets-visitor/img/courses-banner.jpg)" class="hero-banner"> </div>
    </section>
    <!-- Contact page-->
    <section class="contact">
        <div class="container">
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/beranda') }}">Beranda</a></li>
                    <li aria-current="page" class="breadcrumb-item active">Kontak</li>
                </ol>
            </nav>
            <h1 class="mb-4">Kontak</h1>
            <p class="lead mb-5">
                {{-- Anda dapat menghubungi --}}
            </p>
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-icon">
                        <div class="icon icon-map-1"></div>
                    </div>
                    <h3>Alamat</h3>
                    <p>{{ $pengaturan->alamat }}</p>
                </div>
                <div class="col-md-4">
                    <div class="contact-icon">
                        <div class="icon icon-support"></div>
                    </div>
                    <h3>No. Telp</h3>
                    <p><strong>{{ $pengaturan->no_hp }}</strong></p>
                </div>
                <div class="col-md-4">
                    <div class="contact-icon">
                        <div class="icon icon-envelope"></div>
                    </div>
                    <h3>Email</h3>
                    {{-- <p>Please feel free to write an email to us or to use our electronic ticketing system.</p> --}}
                    <strong><a href="mailto:{{ $pengaturan->email }}">{{ $pengaturan->email }}</a></strong>
                    {{-- <li><strong><a href="#">
                                    Ticketio
                                    - our ticketing support platform</a></strong></li> --}}
                </div>
            </div>
        </div>
    </section>
@endsection

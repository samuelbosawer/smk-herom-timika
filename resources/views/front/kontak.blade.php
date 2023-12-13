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
                Anda dapat menghubungi
            </p>
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-icon">
                        <div class="icon icon-map-1"></div>
                    </div>
                    <h3>Address</h3>
                    <p>13/25 New Avenue<br>New Heaven, 45Y 73J<br>England, <strong>Great Britain</strong></p>
                </div>
                <div class="col-md-4">
                    <div class="contact-icon">
                        <div class="icon icon-support"></div>
                    </div>
                    <h3>Call center</h3>
                    <p>This number is toll free if calling from Great Britain otherwise we advise you to use the electronic
                        form of communication.</p>
                    <p><strong>+33 555 444 333</strong></p>
                </div>
                <div class="col-md-4">
                    <div class="contact-icon">
                        <div class="icon icon-envelope"></div>
                    </div>
                    <h3>Electronic support</h3>
                    <p>Please feel free to write an email to us or to use our electronic ticketing system.</p>
                    <ul class="list-style-none">
                        <li><strong><a href="mailto:">info@fakeemail.com</a></strong></li>
                        <li><strong><a href="#">
                                    Ticketio
                                    - our ticketing support platform</a></strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection

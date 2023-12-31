<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="{{ $pengaturan->nama_web }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <meta name="robots" content="all,follow"> --}}
    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $pengaturan->nama_web }}" />
    <meta property="og:description" content="{{ $pengaturan->desk_web }}" />
    <meta property="og:url" content="{{ $pengaturan->alamat_web }}" />
    <meta property="og:site_name" content="{{ $pengaturan->nama_web }}" />
    <meta property="og:image" content="{{ asset($pengaturan->nav) }}" />

    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="{{ $pengaturan->nama_web }}">
    <meta name="twitter:description" content="{{ $pengaturan->desk_web }}">
    <meta name="twitter:image" content="{{ asset($pengaturan->nav) }}">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="/assets-visitor/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="/assets-visitor/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic CSS-->
    <link rel="stylesheet" href="/assets-visitor/css/font.css">
    <!-- Google fonts - Open Sans-->
    <link rel="stylesheet" href="/assets-visitor/https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <!-- Swiper carousel-->
    <link rel="stylesheet" href="/assets-visitor/vendor/swiper/css/swiper.css">
    <!-- Lity-->
    <link rel="stylesheet" href="/assets-visitor/vendor/lity/lity.css">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="/assets-visitor/vendor/bootstrap-select/css/bootstrap-select.css">
    <!-- Theme stylesheet-->
    <link rel="stylesheet" href="/assets-visitor/css/style.green.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="/assets-visitor/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset($pengaturan->nav) }}">

    <!-- Data table -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
    <!-- header-->
    <header class="header">
        <!-- top bar-->
        <div class="top-bar d-none d-md-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="mb-0"> <i class="icon-placeholder"></i> {{ $pengaturan->alamat }}</p>
                    </div>
                    <div class="col-md-6 text-right">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><a href="mailto:{{ $pengaturan->email }}"><i
                                        class="icon-envelope"></i>{{ $pengaturan->email }}</a></li>
                            <li class="list-inline-item"><a href="#"><i
                                        class="icon-telephone"></i>{{ $pengaturan->no_hp }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- navbar-->
        <nav class="navbar navbar-expand-lg">

            <div class="container"> <img src="{{ asset($pengaturan->logo) }}" width="50" srcset=""> <a
                    href="{{ url('/') }}" class="navbar-brand"><strong class="ml-3"> SMKS Hermon Energi <br> Dan
                        Pertambangan Mimika </strong></a>
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                    class="navbar-toggler navbar-toggler-right mt-0"><span></span><span></span><span></span></button>
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <div class="navbar-nav ml-auto">
                        <div class="nav-item"><a href="{{ url('/beranda') }}" class="nav-link nav-custom ">Beranda
                                <span class="sr-only">(current)</span></a></div>
                        <div class="nav-item dropdown"><a id="berita" href="#" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" class="nav-link nav-custom">Berita <i
                                    class="fa fa-angle-down"></i></a>
                            <ul aria-labelledby="berita" class="dropdown-menu">
                                <li><a href="{{ url('/berita') }}"
                                        class="dropdown-item nav-link nav-custom">Berita</a>
                                </li>
                                <li class="dropdown-submenu"><a id="kategori" href="http://example.com"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        class="nav-link">Kategori <i class="fa fa-angle-down"></i></a>
                                    <ul aria-labelledby="kategori" class="dropdown-menu">
                                        @foreach ($kategori as $k)
                                            <li><a href="kategori/{{ $k->slug }}"
                                                    class="dropdown-item nav-link">{{ $k->nama }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- multi-level dropdown-->
                        <div class="nav-item dropdown"><a id="profil" href="#" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" class="nav-link nav-custom">Profil <i
                                    class="fa fa-angle-down"></i></a>
                            <ul aria-labelledby="profil" class="dropdown-menu">
                                <li><a href="{{ url('/profil') }}"
                                        class="dropdown-item nav-link nav-custom">Profil</a>
                                </li>
                                <li><a href="{{ url('/visi-misi') }}" class="dropdown-item nav-link nav-custom">Visi
                                        &
                                        Misi</a>
                                </li>
                                <li><a href="{{ url('/struktur') }}"
                                        class="dropdown-item nav-link nav-custom">Struktur
                                        Organisasi</a>
                                </li>
                                <li><a href="{{ url('/guru') }}" class="dropdown-item nav-link nav-custom">Guru &
                                        Staf</a>
                                </li>

                        </div>
                        {{-- <div class="nav-item"><a href="{{ url('/guru') }}" class="nav-link nav-custom ">Guru
                                <span class="sr-only">(current)</span></a></div> --}}
                        <!-- multi-level dropdown-->
                        <div class="nav-item dropdown"><a id="siswa" href="#" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" class="nav-link nav-custom">Siswa <i
                                    class="fa fa-angle-down"></i></a>
                            <ul aria-labelledby="siswa" class="dropdown-menu">
                                <li><a href="{{ url('/alumi') }}" class="dropdown-item nav-link nav-custom">Alumi</a>
                                </li>

                        </div>
                        <!-- multi-level dropdown-->
                        <div class="nav-item dropdown"><a id="siswa" href="#" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" class="nav-link nav-custom">Jurusan <i
                                    class="fa fa-angle-down"></i></a>
                            <ul aria-labelledby="siswa" class="dropdown-menu">
                                @foreach ($jurusan as $j)
                                    <li><a href="{{ url('/jurusan', $j->slug) }}"
                                            class="dropdown-item nav-link nav-custom text-capitalize ">{{ $j->nama_jurusan }}</a>
                                @endforeach
                                </li>

                        </div>

                        <div class="nav-item"><a href="{{ url('/prestasi') }}" class="nav-link nav-custom ">Prestasi
                                <span class="sr-only">(current)</span> </a> </div>
                        <!-- multi-level dropdown-->
                        <div class="nav-item dropdown"><a id="galeri" href="#" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" class="nav-link nav-custom">Galeri <i
                                    class="fa fa-angle-down"></i></a>
                            <ul aria-labelledby="galeri" class="dropdown-menu">
                                <li><a href="{{ url('/foto-sekolah') }}"
                                        class="dropdown-item nav-link nav-custom">Foto</a></li>
                                <li><a href="{{ url('/video-sekolah') }}"
                                        class="dropdown-item nav-link nav-custom">Video</a>
                                </li>
                        </div>

                        <span class="sr-only">(current)</span></a>
                    </div>
                    <div class="nav-item"><a href="{{ url('/kontak') }}" class="nav-link nav-custom ">Kontak
                            <span class="sr-only">(current)</span></a></div>

                </div>
            </div>
            </div>
        </nav>
    </header>

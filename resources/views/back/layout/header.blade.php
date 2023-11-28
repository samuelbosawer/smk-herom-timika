<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="{{asset($pengaturan->desk_web)}}" name="description" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset($pengaturan->nav)}}">

        <!-- plugin css -->
        <link href="/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
        <link href="/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

        <link href="/assets/css/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
        <link href="/assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

        <!-- icons -->
        <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

        <!-- Data table -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">


        {{-- My CSS --}}


    </head>

    <body class="loading">
    @include('sweetalert::alert')
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <ul class="list-unstyled topnav-menu float-right mb-0">



                        <li class="dropdown d-none d-lg-inline-block">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="fullscreen" href="#">
                                <i class="fe-maximize noti-icon"></i>
                            </a>
                        </li>





                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="{{asset('gambar/admin.png')}}" alt="user-image" class="rounded-circle">
                                <span class="pro-user-name ml-1">
                                    {{ auth()->user()->first_name }} <i class="mdi mdi-chevron-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <!-- item-->

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fe-log-out"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                            </div>
                        </li>

                    </ul>

                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="{{url('/admin')}}" class="logo logo-dark text-center">
                            <span class="logo-sm">
                                <img src="{{asset($pengaturan->logo)}}" alt="" height="22">
                                <!-- <span class="logo-lg-text-light">UBold</span> -->
                            </span>
                            <span class="logo-lg">
                                <img src="{{asset($pengaturan->logo)}}" alt="" height="20">
                                <!-- <span class="logo-lg-text-light">U</span> -->
                            </span>
                        </a>

                        <a href="{{url('/admin')}}" class="logo logo-light text-center">
                            <span class="logo-sm">
                                <img src="{{asset($pengaturan->logo)}}" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{asset($pengaturan->logo)}}" alt="" height="60"> <label class="h5 text-white fw-bolder">ADMIN</label>
                            </span>
                        </a>
                    </div>

                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                        <li>
                            <button class="button-menu-mobile waves-effect waves-light">
                                <i class="fe-menu"></i>
                            </button>
                        </li>

                        <li>
                            <!-- Mobile menu toggle (Horizontal Layout)-->
                            <a class="navbar-toggle nav-link" data-toggle="collapse" data-target="#topnav-menu-content">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>

                        <li class="dropdown d-none d-md-block">
                            <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                Pintasan
                                <i class="mdi mdi-chevron-down"></i>
                            </a>
                            <div class="dropdown-menu">
                                <!-- item-->
                                <a href="{{url('admin/prestasi/create')}}" class="dropdown-item">
                                    <span> Buat Data Prestasi</span>
                                </a>

                                <a href="{{url('admin/alumi/create')}}" class="dropdown-item">
                                    <span> Buat Data Alumi</span>
                                </a>

                                <a href="{{url('admin/berita/create')}}" class="dropdown-item">
                                    <span> Buat Data Berita</span>
                                </a>

                                <a href="{{url('admin/foto/create')}}" class="dropdown-item">
                                    <span> Buat Data Foto</span>
                                </a>

                                <a href="{{url('admin/video/create')}}" class="dropdown-item">
                                    <span> Buat Data Video</span>
                                </a>

                                <a href="{{url('admin/profil')}}" class="dropdown-item">
                                    <span> Ubah Data Profil</span>
                                </a>

                                <a href="{{url('admin/pengaturan')}}" class="dropdown-item">
                                    <span> Ubah Data Pengaturan</span>
                                </a>


                            </div>
                        </li>

                        <li class="dropdown dropdown-mega d-none d-xl-block">


                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- end Topbar -->

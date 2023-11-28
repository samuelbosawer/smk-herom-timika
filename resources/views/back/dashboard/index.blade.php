@extends('back.layout.tamplate')
@section('title')
    Dashboard - Admin
 @endsection
@section('content')


            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
                                            <!-- <li class="breadcrumb-item active">Dashboard </li> -->
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">

                            <div class="col-md-6 col-xl-6">
                                <div class="card-box">
                                    <i class="fa fa-info-circle text-muted float-right" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="More Info"></i>
                                    <h4 class="mt-0 font-16">Data Prestasi</h4>
                                    <h2 class="text-success my-3 text-center"> <span data-plugin="counterup">{{$prestasi}}</span></h2>
                                    <p></p>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-6">
                                <div class="card-box">
                                    <i class="fa fa-info-circle text-muted float-right" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="More Info"></i>
                                    <h4 class="mt-0 font-16">Data Alumi</h4>
                                    <h2 class="text-success my-3 text-center"> <span data-plugin="counterup">{{$alumi}}</span></h2>
                                    <p class="text-muted mb-0"></p>

                                </div>
                            </div>

                            <div class="col-md-6 col-xl-6">
                                <div class="card-box">
                                    <i class="fa fa-info-circle text-muted float-right" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="More Info"></i>
                                    <h4 class="mt-0 font-16">Data Berita</h4>
                                    <h2 class="text-success my-3 text-center"> <span data-plugin="counterup">{{$berita}}</span></h2>
                                    <p class="text-muted mb-0">Publish : {{$publish}} <span class="float-right">  Draft : {{$draft}} </span></p>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-6">
                                <div class="card-box">
                                    <i class="fa fa-info-circle text-muted float-right" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="More Info"></i>
                                    <h4 class="mt-0 font-16">Data Galeri </h4>
                                    <h2 class="text-success my-3 text-center"> <span data-plugin="counterup">{{$foto+$video}}</span></h2>
                                    <p class="text-muted mb-0">Foto : {{$foto}}  <span class="float-right">  Video : {{$video}} </span></p>
                                </div>
                            </div>



                        </div>
                        <!-- end row -->



                    </div> <!-- container -->

                </div> <!-- content -->
@endsection


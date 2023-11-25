@extends('back.layout.tamplate')
@section('title')
    Tambah Data Video - Admin
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
                                            <li class="breadcrumb-item"><a href="{{url('admin/video')}}">Video</a></li>
                                            <li class="breadcrumb-item active"> Tambah </li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Tambah Data Video</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                     <form action="{{url('admin/video/storage')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="judul_video"> Judul Video <span class="text-danger">*</span> </label>
                                                <input type="text" id="judul_video" value="{{old('judul_video')}}" name="judul_video" placeholder="Masukan judul foto" class="form-control">
                                                @if($errors->has('judul_video'))
                                                    <label class="text-danger"> {{ $errors->first('judul_video') }} </label>
                                                @endif
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="link_video"> Link Video <span class="text-danger">*</span>  </label>
                                                <label class="mt-0">Contoh link yang dicopy : https://www.youtube.com/watch?v=<span class="text-danger">IjDHbK38e_o</span></label>
                                                <input type="text" id="link_video" value="{{old('link_video')}}" name="link_video" placeholder="Masukan link video" class="form-control">
                                                @if($errors->has('link_video'))
                                                    <label class="text-danger"> {{ $errors->first('link_video') }} </label>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-primary">Simpan  <i data-feather="save"></i></button>
                                        </div>
                                    </div>

                                </div> <!-- end card-box-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                     </form>



                    </div> <!-- container -->

                </div> <!-- content -->
@endsection


@extends('back.layout.tamplate')
@section('title')
    Tambah Data Foto - Admin
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
                                            <li class="breadcrumb-item"><a href="{{url('admin/foto')}}">Foto</a></li>
                                            <li class="breadcrumb-item active"> Tambah </li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Tambah Data Foto</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                     <form action="{{url('admin/foto/storage')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="judul_foto"> Judul Foto <span class="text-danger">*</span> </label>
                                                <input type="text" id="judul_foto" value="{{old('judul_foto')}}" name="judul_foto" placeholder="Masukan judul foto" class="form-control">
                                                @if($errors->has('judul_foto'))
                                                    <label class="text-danger"> {{ $errors->first('judul_foto') }} </label>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="link_foto"> Link Foto (Jika Ada) </label>
                                                <input type="text" id="link_foto" value="{{old('link_foto')}}" name="link_foto" placeholder="Masukan link foto" class="form-control">
                                                @if($errors->has('link_foto'))
                                                    <label class="text-danger"> {{ $errors->first('link_foto') }} </label>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="foto"> Foto  <span class="text-danger">*</span>  </label>
                                                <input type="file" id="foto" value="{{old('foto')}}" name="foto" placeholder="" class="form-control">
                                                @if($errors->has('foto'))
                                                    <label class="text-danger"> {{ $errors->first('foto') }} </label>
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


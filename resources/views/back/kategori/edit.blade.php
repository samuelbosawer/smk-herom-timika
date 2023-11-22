@extends('back.layout.tamplate')
@section('title')
    Ubah Data Kategori Berita - Admin
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
                                            <li class="breadcrumb-item"><a href="{{url('admin/kategori')}}">Kategori Berita</a></li>
                                            <li class="breadcrumb-item active"> Ubah </li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Ubah Data Kategori Berita</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                     <form action="{{url('admin/kategori',$id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="nama"> Nama Kategori <span class="text-danger">*</span> </label>
                                                <input type="text" id="nama" value="{{old('nama',$data->nama)}}" name="nama" placeholder="" class="form-control">
                                                @if($errors->has('nama'))
                                                    <label class="text-danger"> {{ $errors->first('nama') }} </label>
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


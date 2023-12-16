@extends('back.layout.tamplate')
@section('title')
    Tambah Data Guru - Admin
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
                                    <li class="breadcrumb-item"><a href="{{ url('admin/guru') }}">Guru</a></li>
                                    <li class="breadcrumb-item active"> Tambah </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Tambah Data Guru</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <form action="{{ url('admin/guru/storage') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="card-box">

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="nama_guru"> Nama Guru/Staf <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" id="nama_guru" value="{{ old('nama_guru') }}"
                                                name="nama_guru" placeholder="Masukan nama prestasi" class="form-control">
                                            @if ($errors->has('nama_guru'))
                                                <label class="text-danger"> {{ $errors->first('nama_guru') }} </label>
                                            @endif
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="jabatan_guru"> Jabatan <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" id="jabatan_guru" value="{{ old('jabatan_guru') }}"
                                                name="jabatan_guru" placeholder="Masukan nama prestasi"
                                                class="form-control">
                                            @if ($errors->has('jabatan_guru'))
                                                <label class="text-danger"> {{ $errors->first('jabatan_guru') }} </label>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="foto_guru"> Foto </label>
                                            <input type="file" id="foto_guru" value="{{ old('foto_guru') }}"
                                                name="foto_guru" placeholder="" class="form-control">
                                            @if ($errors->has('foto_guru'))
                                                <label class="text-danger"> {{ $errors->first('foto_guru') }} </label>
                                            @endif
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary">Simpan <i
                                                data-feather="save"></i></button>
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

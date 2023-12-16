@extends('back.layout.tamplate')
@section('title')
    Ubah Data Pengumuman - Admin
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
                                    <li class="breadcrumb-item"><a href="{{ url('admin/pengumuman') }}">Pengumuman</a></li>
                                    <li class="breadcrumb-item active"> Ubah </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Ubah Data Pengumuman</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <form action="{{ url('admin/pengumuman', $id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12">
                            <div class="card-box">

                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <label for="judul_pengumuman"> Judul Pengumuman <span
                                                    class="text-danger">*</span>
                                            </label>
                                            <input type="text" id="judul_pengumuman"
                                                value="{{ old('judul_pengumuman', $data->judul_pengumuman) }}"
                                                name="judul_pengumuman" placeholder="" class="form-control">
                                            @if ($errors->has('judul_pengumuman'))
                                                <label class="text-danger"> {{ $errors->first('judul_pengumuman') }}
                                                </label>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group mb-3">
                                            <label for="isi_pengumuman"> Isi Pengumuman <span class="text-danger">*</span>
                                            </label>
                                            <textarea id="isi_pengumuman" name="isi_pengumuman" rows="5" class="form-control rounded-0" placeholder="">{{ old('isi_pengumuman', $data->isi_pengumuman) }}</textarea>
                                            @if ($errors->has('isi_pengumuman'))
                                                <label class="text-danger"> {{ $errors->first('isi_pengumuman') }} </label>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group mb-3">
                                                    <label for="cover_foto"> Gambar Cover <span class="text-danger">*</span>
                                                    </label>
                                                    <img src="{{ asset($data->cover_foto) }}" alt="" srcset=""
                                                        width="200">
                                                    <input type="file" id="cover_foto" value="{{ old('cover_foto') }}"
                                                        name="cover_foto" placeholder="" class="form-control">
                                                    @if ($errors->has('cover_foto'))
                                                        <label class="text-danger"> {{ $errors->first('cover_foto') }}
                                                        </label>
                                                    @endif
                                                </div>
                                            </div>
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

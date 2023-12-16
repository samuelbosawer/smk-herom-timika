@extends('back.layout.tamplate')
@section('title')
    Ubah Data Jurusan - Admin
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
                                    <li class="breadcrumb-item"><a href="{{ url('admin/jurusan') }}">Jurusan</a></li>
                                    <li class="breadcrumb-item active"> Ubah </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Ubah Data Jurusan</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <form action="{{ url('admin/jurusan', $id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12">
                            <div class="card-box">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group mb-3">
                                            <label for="nama_jurusan"> Nama Jurusan <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" id="nama_jurusan"
                                                value="{{ old('nama_jurusan', $data->nama_jurusan) }}" name="nama_jurusan"
                                                placeholder="" class="form-control">
                                            @if ($errors->has('nama_jurusan'))
                                                <label class="text-danger"> {{ $errors->first('nama_jurusan') }} </label>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group mb-3">
                                            <label for="profil_jurusan"> Profil Jurusan <span class="text-danger">*</span>
                                            </label>
                                            <textarea id="isi" name="profil_jurusan" rows="5" class="form-control rounded-0" placeholder="">{{ old('profil_jurusan', $data->profil_jurusan) }}</textarea>
                                            @if ($errors->has('profil_jurusan'))
                                                <label class="text-danger"> {{ $errors->first('profil_jurusan') }} </label>
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

    @push('script-footer')
        <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
        <script>
            var options = {
                filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
            };

            CKEDITOR.replace('isi', options);
        </script>
    @endpush

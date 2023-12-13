@extends('back.layout.tamplate')
@section('title')
    Struktur Organisasi - Admin
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
                                    <li class="breadcrumb-item"><a href="{{ url('admin/struktur-organisasi') }}">Profil
                                            Sekolah</a></li>
                                    {{-- <li class="breadcrumb-item active"> Tambah </li> --}}
                                </ol>
                            </div>
                            <h4 class="page-title">Struktur Organisasi Sekolah</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <form action="{{ url('admin/struktur-organisasi', $id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12">
                            <div class="card-box">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <label for="isi"> Struktur Organisasi Sekolah <span
                                                    class="text-danger">*</span>
                                            </label>
                                            <textarea id="isi" name="struktur" rows="5" class="form-control rounded-0" placeholder="">{{ $data->struktur }}</textarea>
                                            @if ($errors->has('struktur'))
                                                <label class="text-danger"> {{ $errors->first('struktur') }} </label>
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

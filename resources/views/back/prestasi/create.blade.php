@extends('back.layout.tamplate')
@section('title')
    Tambah Prestasi - Admin
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
                                            <li class="breadcrumb-item"><a href="{{url('admin/prestasi')}}">Prestasi</a></li>
                                            <li class="breadcrumb-item active"> Tambah </li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Tambah Data Prestasi</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                     <form action="{{url('admin/prestasi/storage')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="nama_prestasi"> Nama Prestasi <span class="text-danger">*</span> </label>
                                                <input type="text" id="nama_prestasi" value="{{old('nama_prestasi')}}" name="nama_prestasi" placeholder="Masukan nama prestasi" class="form-control">
                                                @if($errors->has('nama_prestasi'))
                                                    <label class="text-danger"> {{ $errors->first('nama_prestasi') }} </label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="tanggal_prestasi"> Tanggal Prestasi <span class="text-danger">*</span> </label>
                                                <input type="date" id="tanggal_prestasi" name="tanggal_prestasi" value="{{old('tanggal_prestasi')}}" placeholder="Masukan tanggal prestasi" class="form-control">
                                                @if($errors->has('tanggal_prestasi'))
                                                    <label class="text-danger"> {{ $errors->first('tanggal_prestasi') }} </label>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="keterangan"> Keterangan </label>
                                                <textarea id="keterangan" name="keterangan" placeholder="Masukan keterangan" rows="5" class="form-control">{{old('keterangan')}} </textarea>
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


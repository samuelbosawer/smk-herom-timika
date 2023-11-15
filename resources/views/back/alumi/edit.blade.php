@extends('back.layout.tamplate')
@section('title')
    Ubah Data Alumi - Admin
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
                                            <li class="breadcrumb-item"><a href="{{url('admin/alumi')}}">Alumi</a></li>
                                            <li class="breadcrumb-item active"> Ubah </li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Ubah Data Alumi</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                     <form action="{{url('admin/alumi', $id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="nama_alumi"> Nama Alumi <span class="text-danger">*</span> </label>
                                                <input type="text" id="nama_alumi" value="{{old('nama_alumi',$data->nama_alumi)}}" name="nama_alumi" placeholder="Masukan nama prestasi" class="form-control">
                                                @if($errors->has('nama_alumi'))
                                                    <label class="text-danger"> {{ $errors->first('nama_alumi') }} </label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="tahun_lulus"> Tahun Lulus <span class="text-danger">*</span> </label>
                                                <select name="tahun_lulus" class="form-control" id="tahun_lulus">
                                                    <option value="{{old('tahun_lulus',$data->tahun_lulus)}}">{{old('tahun_lulus',$data->tahun_lulus)}}</option>
                                                    @for ($x = 2000; $x<=2050; $x++)
                                                        <option value="{{$x}}"> {{$x}}</option>
                                                    @endfor
                                                </select>
                                                @if($errors->has('tahun_lulus'))
                                                    <label class="text-danger"> {{ $errors->first('tahun_lulus') }} </label>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="jurusan"> Jurusan <span class="text-danger">*</span> </label>
                                                <select name="jurusan" class="form-control" id="jurusan">
                                                    <option value="{{old('jurusan',$data->jurusan)}}">{{old('jurusan',$data->jurusan)}}</option>
                                                    <option value="Geologi Pertambangan">Geologi Pertambangan</option>
                                                    <option value="Teknik Alat Berat">Teknik Alat Berat</option>
                                                    <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                                                    <option value="Perkantoran">Perkantoran</option>
                                                </select>
                                                    @if($errors->has('jurusan'))
                                                    <label class="text-danger"> {{ $errors->first('jurusan') }} </label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="foto"> Foto  </label>
                                                <br>
                                                <img src="{{asset($data->foto)}}" width="100" alt="" srcset="">
                                                <input type="file" id="foto" value="{{old('foto', $data->foto)}}" name="foto" placeholder="" class="form-control">
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


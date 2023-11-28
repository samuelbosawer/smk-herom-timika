@extends('back.layout.tamplate')
@section('title')
    Pengaturan - Admin
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
                                            <li class="breadcrumb-item"><a href="{{url('admin/pengaturan')}}">Pengaturan</a></li>
                                            {{-- <li class="breadcrumb-item active"> Tambah </li> --}}
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Pengaturan</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                     <form action="{{url('admin/pengaturan',$id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group mb-3">
                                                <label for="nama_web"> Nama Wesbite </label>
                                                <input type="text" id="nama_web" value="{{old('nama_web',$data->nama_web)}}" name="nama_web" placeholder="Masukan nama website" class="form-control">
                                                @if($errors->has('nama_web'))
                                                    <label class="text-danger"> {{ $errors->first('nama_web') }} </label>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group mb-3">
                                                <label for="alamat_web"> Alamat Website </label>
                                                <input type="text" id="alamat_web" value="{{old('alamat_web',$data->alamat_web)}}" name="alamat_web" placeholder="" class="form-control">
                                                @if($errors->has('alamat_web'))
                                                    <label class="text-danger"> {{ $errors->first('alamat_web') }} </label>
                                                @endif
                                            </div>
                                        </div>


                                        <div class="col-md-8">
                                            <div class="form-group mb-3">
                                                <label for="desk_web"> Deskripsi Wesbite </label>
                                                <textarea id="desk_web" name="desk_web" rows="5" class="form-control rounded-0" placeholder="">{{old('desk_web',$data->desk_web)}}</textarea>

                                                @if($errors->has('desk_web'))
                                                    <label class="text-danger"> {{ $errors->first('desk_web') }} </label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-8">
                                            <div class="form-group mb-3">
                                                <label for="no_hp"> No Hp Sekolah </label>
                                                <input type="text" id="no_hp" value="{{old('no_hp',$data->no_hp)}}" name="no_hp" placeholder="" class="form-control">
                                                @if($errors->has('no_hp'))
                                                    <label class="text-danger"> {{ $errors->first('no_hp') }} </label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-8">
                                            <div class="form-group mb-3">
                                                <label for="alamat"> Alamat Sekolah </label>
                                                <textarea id="alamat" name="alamat" rows="5" class="form-control rounded-0" placeholder="">{{old('alamat',$data->alamat)}}</textarea>

                                                @if($errors->has('alamat'))
                                                    <label class="text-danger"> {{ $errors->first('alamat') }} </label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-8">
                                            <div class="form-group mb-3">
                                                <label for="email"> Email Sekolah </label>
                                                <input type="text" id="email" value="{{old('email',$data->email)}}" name="email" placeholder="" class="form-control">
                                                @if($errors->has('email'))
                                                    <label class="text-danger"> {{ $errors->first('email') }} </label>
                                                @endif
                                            </div>
                                        </div>


                                        <div class="col-md-8">
                                            <div class="form-group mb-3">
                                                <label for="ig"> Instagram Sekolah </label>
                                                <input type="text" id="ig" value="{{old('ig',$data->ig)}}" name="ig" placeholder="" class="form-control">
                                                @if($errors->has('ig'))
                                                    <label class="text-danger"> {{ $errors->first('ig') }} </label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-8">
                                            <div class="form-group mb-3">
                                                <label for="facebook"> Facebook Sekolah </label>
                                                <input type="text" id="facebook" value="{{old('facebook',$data->facebook)}}" name="facebook" placeholder="" class="form-control">
                                                @if($errors->has('facebook'))
                                                    <label class="text-danger"> {{ $errors->first('facebook') }} </label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-8">
                                            <div class="form-group mb-3">
                                                <label for="youtube"> Channel Youtube Sekolah </label>
                                                <input type="text" id="youtube" value="{{old('youtube',$data->youtube)}}" name="youtube" placeholder="" class="form-control">
                                                @if($errors->has('youtube'))
                                                    <label class="text-danger"> {{ $errors->first('youtube') }} </label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-8">
                                            <div class="form-group mb-3">
                                                <label for="tiktok"> Tiktok Sekolah </label>
                                                <input type="text" id="tiktok" value="{{old('tiktok',$data->tiktok)}}" name="tiktok" placeholder="" class="form-control">
                                                @if($errors->has('tiktok'))
                                                    <label class="text-danger"> {{ $errors->first('tiktok') }} </label>
                                                @endif
                                            </div>
                                        </div>



                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="logo"> Logo Sekolah </label>
                                                <br>
                                                <img src="{{asset($data->logo)}}" width="200" alt="" srcset="">
                                                <br>
                                                <input type="file" id="logo" value="{{old('logo',$data->logo)}}" name="logo" placeholder="" class="form-control">
                                                @if($errors->has('logo'))
                                                    <label class="text-danger"> {{ $errors->first('logo') }} </label>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="nav"> Nav Website </label>
                                                <br>
                                                <img src="{{asset($data->nav)}}" width="200" alt="" srcset="">
                                                <br>
                                                <input type="file" id="nav" value="{{old('nav',$data->nav)}}" name="nav" placeholder="" class="form-control">
                                                @if($errors->has('nav'))
                                                    <label class="text-danger"> {{ $errors->first('nav') }} </label>
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


@extends('back.layout.tamplate')
@section('title')
    Tambah Data Berita - Admin
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
                                            <li class="breadcrumb-item"><a href="{{url('admin/berita')}}">Berita</a></li>
                                            <li class="breadcrumb-item active"> Tambah </li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Tambah Data Berita</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                     <form action="{{url('admin/berita/storage')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">

                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group mb-3">
                                                <label for="judul"> Judul berita <span class="text-danger">*</span> </label>
                                                <input type="text" id="judul" value="{{old('judul')}}" name="judul" placeholder="" class="form-control">
                                                @if($errors->has('judul'))
                                                    <label class="text-danger"> {{ $errors->first('judul') }} </label>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group mb-3">
                                                <label for="isi"> Isi Berita <span class="text-danger">*</span> </label>
                                                <textarea id="isi" name="isi" rows="5" class="form-control rounded-0" placeholder=""></textarea>
                                                    @if($errors->has('isi'))
                                                    <label class="text-danger"> {{ $errors->first('isi') }} </label>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group mb-3">
                                                    <label for="cover"> Gambar Cover <span class="text-danger">*</span>  </label>
                                                    <input type="file" id="cover" value="{{old('cover')}}" name="cover" placeholder="" class="form-control">
                                                    @if($errors->has('cover'))
                                                        <label class="text-danger"> {{ $errors->first('cover') }} </label>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group mb-3">
                                                    <label for="status"> Status <span class="text-danger">*</span> </label>
                                                    <select name="status" id="" class="form-control" >
                                                        <option value="">Pilih Status</option>
                                                        <option value="Publish">Publish</option>
                                                        <option value="Draft">Draft</option>
                                                    </select>
                                                    @if($errors->has('status'))
                                                     <label class="text-danger"> {{ $errors->first('status') }} </label>
                                                @endif
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group mb-3">
                                                    <label for="id_kategori"> Kategori <span class="text-danger">*</span> </label>
                                                    <select name="id_kategori" id="id_kategori" class="form-control" >
                                                        <option value="">Pilih Kategori</option>
                                                        @foreach ($datas as $data )
                                                            <option value="{{$data->id}}">{{$data->nama}}</option>
                                                        @endforeach
                                                    </select>
                                                    @if($errors->has('id_kategori'))
                                                     <label class="text-danger"> {{ $errors->first('id_kategori') }} </label>
                                                @endif
                                                </div>
                                            </div>
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


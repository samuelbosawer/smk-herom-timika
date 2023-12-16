@extends('back.layout.tamplate')
@section('title')
    Detail Data Berita - Admin
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
                                            <li class="breadcrumb-item active"> Detail </li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Detail Data Berita</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">

                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group mb-3">
                                                <label for="judul"> Judul berita <span class="text-danger">*</span> </label>
                                                <input type="text" id="judul" value="{{old('judul',$data->judul)}}" name="judul" placeholder="" class="form-control">
                                                @if($errors->has('judul'))
                                                    <label class="text-danger"> {{ $errors->first('judul') }} </label>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="isi"> Isi Berita <span class="text-danger">*</span> </label>
                                                <textarea id="isi" name="isi" rows="5" class="form-control rounded-0" placeholder="">{{old('isi',$data->isi)}}</textarea>
                                                    @if($errors->has('isi'))
                                                    <label class="text-danger"> {{ $errors->first('isi') }} </label>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group mb-3">
                                                    <label for="cover"> Gambar Cover <span class="text-danger">*</span>  </label>
                                                    <br>
                                                    <img src="{{asset($data->cover)}}" alt="" srcset="" width="200">
                                                    <br>
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
                                                        <option value="{{old('status',$data->status)}}">{{{old('status',$data->status)}}}</option>
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
                                                        <option value="{{$data->kategori->id}}">{{$data->kategori->nama}}</option>
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
                                            <a href="{{url('admin/berita/'.$id.'/edit')}}" class="btn btn-primary rounded ">  <i data-feather="edit"></i> </a>

                                            <form class="d-inline" action="{{url('admin/berita/'.$data->id)}}" method="POST">
                                                @csrf
                                                @method("DELETE")
                                                    <button class="btn btn-danger " onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')"  type="submit"> <i data-feather="trash"></i></button>
                                                </form>
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




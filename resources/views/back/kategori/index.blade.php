@extends('back.layout.tamplate')
@section('title')
    Kategori Berita - Admin
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
                                            <li class="breadcrumb-item"><a href="{{url('/kategori')}}">Kategori Berita</a></li>
                                            <!-- <li class="breadcrumb-item active">Dashboard </li> -->
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Kategori Berita</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-md-12 col-xl-12">
                                <div class="card-box">
                                    <div class="col-12">
                                            <a href="{{url('admin/kategori/create')}}" class="btn btn-primary mb-3"><i data-feather="plus"></i> Tambah Data Kategori Berita</a>
                                    </div>
                                    <div class="col-12 table-responsive">
                                        <table id="myTable" class="table  table-striped table-bordered" >
                                            <thead>
                                                <tr class="bg-dark text-white">
                                                    <th>No</th>
                                                    <th>Nama Kategori</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @php
                                                    $i =0;
                                                @endphp
                                                @foreach($datas as $data)
                                                <tr>
                                                    <td>{{++$i}}</td>
                                                    <td>{{$data->nama}}</td>
                                                    <td>
                                                        <a href="{{url('admin/kategori/'.$data->id.'/edit')}}" class="btn btn-primary rounded ">  <i data-feather="edit"></i> </a>
                                                        {{-- <a href="{{}}" class="btn btn-danger rounded mb-1">  </a> --}}

                                                        <form class="d-inline" action="{{url('admin/kategori/'.$data->id)}}" method="POST">
                                                            @csrf
                                                            @method("DELETE")
                                                                <button class="btn btn-danger " onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')"  type="submit"> <i data-feather="trash"></i></button>
                                                            </form>

                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

                                    </div>
                                </div> <!-- end card-box-->
                            </div> <!-- end col -->


                        </div>
                        <!-- end row -->



                    </div> <!-- container -->

                </div> <!-- content -->


@endsection


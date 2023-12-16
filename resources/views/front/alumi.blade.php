@extends('front.layout.tamplate')
@section('title')
    Alumi
@endsection
@section('content')
    <!-- Hero Section-->
    <section class="hero hero-page">
        <div style="background: url(assets-visitor/img/courses-banner.jpg)" class="hero-banner"> </div>
    </section>


    <!-- News Section-->
    <section class="latest-news">
        <div class="container">
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/beranda') }}">Beranda</a></li>
                    <li aria-current="page" class="breadcrumb-item active">Alumi</li>
                </ol>
            </nav>
        </div>
        <div class="container">
            <header class="text-center">
                <h2> Alumi </h2>
                <p>Daftar nama siswa tamatan SMKS Hermon Timika</p>
            </header>

            <div class="row">
                <div class="col-lg-12 ">
                    <div class="row mt-5">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr class="bg-dark text-white">
                                            <th>No</th>
                                            <th>Nama Alumi</th>
                                            <th>Tahun Lulus</th>
                                            <th>Jurusan</th>
                                            <th>Foto</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @php
                                            $i = 0;
                                        @endphp
                                        @foreach ($data as $data)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $data->nama_alumi }}</td>
                                                <td>{{ $data->tahun_lulus }}</td>
                                                <td>{{ $data->jurusan }}</td>
                                                <td> <img src="{{ asset($data->foto) }}" width="50" alt=""
                                                        srcset=""> </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    {{-- Data table --}}
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        let table = new DataTable('#myTable');
    </script>
@endsection

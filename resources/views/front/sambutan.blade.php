@extends('front.layout.tamplate')
@section('title')
    Sambutan Kepala Sekolah
@endsection
@section('content')
    <!-- Hero Section-->
    <section class="hero hero-page">
        <div style="background: url(assets-visitor/img/courses-banner.jpg)" class="hero-banner"> </div>
    </section>

    <section>
        <div class="container">
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/beranda') }}">Beranda</a></li>
                    <li aria-current="page" class="breadcrumb-item active">Sambutan Kepala Sekolah</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-xl-8 text-content">
                    <h1 class="mb-4">Sambutan Kepala Sekolah </h1>
                    <p style="text-align: justify">
                        Saya ingin mengucapkan terima kasih yang sebesar-besarnya atas inisiatif dan dedikasi Bapak/Ibu
                        dalam pembuatan website sekolah. Keberadaan website ini tidak hanya memberikan kemudahan akses
                        informasi, tetapi juga menciptakan wadah yang modern dan efisien untuk berkomunikasi.
                    </p>

                    <p style="text-align: justify">

                        Pembuatan website ini adalah langkah yang sangat positif untuk kemajuan sekolah kita. Dengan adanya
                        platform ini, kami dapat lebih mudah memperoleh informasi terkini seputar kegiatan sekolah,
                        pengumuman, dan berbagai hal penting lainnya. Selain itu, website ini juga menjadi sarana yang
                        efektif untuk memperkenalkan sekolah kepada masyarakat luas.
                    </p>

                    <p style="text-align: justify">

                        Kami sangat menghargai waktu dan usaha yang Bapak/Ibu berikan dalam proses pengembangan website ini.
                        Semoga dengan adanya website ini, kita dapat terus meningkatkan transparansi, keterbukaan, dan
                        kualitas pendidikan di sekolah kita.
                    </p>

                    <p style="text-align: justify">

                        Sekali lagi, terima kasih banyak atas dedikasi Bapak/Ibu. Semoga website ini dapat menjadi alat yang
                        bermanfaat dan memperkuat hubungan antara sekolah, siswa, orang tua, dan masyarakat.
                    </p>

                    Hormat kami,<br>
                    Valentina Waromi, ST <br>
                    Kepala Sekolah
                    SMKS Hermon Energi Dan Pertambangan Mimika


                    </p>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection

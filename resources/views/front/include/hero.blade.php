<!-- Hero Section-->
<section class="hero hero-home">
    <div class="swiper-container hero-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div style="background: url(assets-visitor/img/hero-img.jpg);" class="hero-content has-overlay-dark">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <img src="{{ asset($pengaturan->logo) }}" width="200" alt="" srcset="">
                                <h3 class="mt-3">{{ $pengaturan->nama_web }} <span> </span></h3>
                                <p>Wadah pendidikan dan pembinaan anak bangsa yang mengedepankan inovasi, kreativitas
                                    dan kerja sama guna membangan bangsa.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div style="background: url(assets-visitor/img/hero-img-3.jpg);" class="hero-content has-overlay-dark">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9">
                                <img src="{{ asset($pengaturan->logo) }}" width="200" alt="" srcset="">
                                <h4 class="mt-3">{{ $pengaturan->nama_web }} <span> </span>
                                </h4>
                                <p> SMK Hermon mengambil 4 (empat) jurusan sebagai
                                    fokus pendidikan
                                    yakni Geologi Pertambangan, Teknik Alat berat, Administrasi Perkantoran dan Teknik
                                    Komputer dan
                                    Jaringan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="swiper-slide">
                <div style="background: url(assets-visitor/img/hero-img-3.jpg);" class="hero-content has-overlay-dark">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <img src="{{ asset($pengaturan->logo) }}" width="200" alt="" srcset="">
                                <h3 class="mt-3">SMK HERMON TIMIKA <span> </span></h3>
                                <p>SMK HERMON - TIMIKA adalah wadah pendidikan dan pembinaan anak bangsa yang
                                    mengedepankan inovasi,
                                    kreativitas dan kerja. Pendidikan kejuruan menjadi tulang
                                    punggung
                                    mengangkat kesejahteraan bangsa. Diharapkan melalui empat jurusan ini SMK Hermon
                                    dapat menciptkan hasil
                                    lulusan yang
                                    dapat langsung bekerja di bidangnya masing-masing.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <!-- Add Pagination-->
        <div class="swiper-pagination"></div>
    </div>
</section>
<section class="info-boxes">
    <div class="container">
        <div class="row">
            @foreach ($jurusan as $j)
                <a href="{{ url('jurusan', $j->slug) }}" style="background: url(assets-visitor/img/boxes-img-1.jpg);"
                    class="info-box {{ $j->warna }} text-white  col-lg-3">
                    <div class="info-box-content">
                        <h3 class="text-uppercase"> {{ $j->nama_jurusan }}</h3>
                        <p></p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>

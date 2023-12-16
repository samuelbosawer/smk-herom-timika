 <!-- Events Section-->
 <section class="events">
     <div class="container p-3">
         <header class="text-center">
             <h1 class="mt-5 mb-1"> <small></small>PENGUMUMAN</h1>
             <div class="row text-center">
                 <p class="col-lg-8 mx-auto"></p>
             </div>
         </header>
         <div class="swiper-container events-slider pb-5">
             <div class="swiper-wrapper">
                 @foreach ($pengumuman as $p)
                     <div class="swiper-slide">
                         <div class="event row align-items-center align-items-stretch">
                             <div class="col-lg-6 pr-lg-0">
                                 <div class="image"><img src="{{ asset($p->cover_foto) }}" width="100%"
                                         alt="{{ $p->judul_pengumuman }}">
                                     <div class="overlay d-flex align-items-end">
                                         <div class="date">
                                             <strong></strong><span>{{ Carbon\Carbon::parse($p->created_at)->isoFormat('dddd, D MMMM Y') }}</span>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-6 pl-lg-0">
                                 <div class="text bg-gray d-flex align-items-center">
                                     <div class="text-inner">
                                         <h4>{{ $p->judul_pengumuman }}</h4>
                                         {{ Str::limit($p->isi_pengumuman, $limit = 152, $end = '...') }}
                                         <br>
                                         <a href="{{ url('pengumuman', $p->slug) }}"
                                             class="btn btn-outline-primary">Selengkapnya</a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 @endforeach
             </div>

             <!-- Add Pagination-->
             <div class="swiper-pagination mt-5"></div>
         </div>
     </div>
 </section>

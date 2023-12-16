  <!-- sidebar-->
  <div class="blog-sidebar">
      <div class="widget search">
          <div class="widget-header"><strong>Search</strong></div>
          <div class="widget-body">
              @include('front.include.search')
          </div>
      </div>
      <div class="tour mb-3">
          <div class="">
              <div class="row ">
                  <div class="col-lg-12">
                      <div class="widget-header"><strong> Video Profil Sekolah </strong></div>

                      <div class="video">
                          <a href="https://youtu.be/IjDHbK38e_o" data-lity>
                              <img src="/assets-visitor/img/hero-img.jpg" class="img-fluid" alt="...">
                              <div class="overlay d-flex align-items-center justify-content-center">
                                  <img src="/assets-visitor/img/play.svg" alt="...">
                              </div>
                          </a>
                      </div>
                  </div>

              </div>
          </div>
      </div>
      <div class="widget categoris">
          <div class="widget-header"><strong> Sambutan Kepala Sekolah </strong></div>
          <div class="widget-body">
              <ul class="categoris-list list-unstyled">
                  <li>
                      <div class="text-center">
                          <p> <strong class="">Valentina Waromi, ST</strong> </p>
                          <p class="text-small"> Kepada Sekolah <br> SMKS Hermon Energi Dan Pertambangan Mimika
                          </p>
                      </div>

                      <a href="{{ url('sambutan') }}"
                          class=" btn btn-primary text-white align-items-end justify-content-between">
                          Baca Selengkapnya </a>
                  </li>
              </ul>
          </div>
      </div>

      <div class="widget social border-0 pd-0">
          <ul class="social-buttons list-unstyled">
              <li><a href="{{ $pengaturan->facebook }}" class="facebook d-flex" target="_blank">
                      <div class="icon"> <i class="fa fa-facebook"></i></div>
                      <div class="text d-flex justify-content-between">
                          <div class="right"><strong>Facebook</strong></div>
                      </div>
                  </a></li>



              <li><a href="{{ $pengaturan->youtube }}" class="youtube d-flex mb-0" target="_blank">
                      <div class="icon"> <i class="fa fa-youtube-play"></i></div>
                      <div class="text d-flex justify-content-between">
                          <div class="right"><strong>Youtube</strong></div>
                      </div>
                  </a></li>
          </ul>
      </div>
      <div class="widget categoris">
          <div class="widget-header"><strong>Kategori</strong></div>
          <div class="widget-body">
              <ul class="categoris-list list-unstyled">
                  @foreach ($kategori as $k)
                      <li><a href="{{ url('kategori', $k->slug) }}"
                              class="d-flex align-items-end justify-content-between"> {{ $k->nama }} </a></li>
                  @endforeach
              </ul>
          </div>
      </div>

  </div>

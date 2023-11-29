  <!-- sidebar-->
  <div class="blog-sidebar">
    <div class="widget search">
      <div class="widget-header"><strong>Search</strong></div>
      <div class="widget-body">
        <form action="#">
          <div class="form-group mb-0">
            <input type="search" placeholder="Enter your keyword">
            <button type="submit"> <i class="fa fa-search"></i></button>
          </div>
        </form>
      </div>
    </div>
    <div class="widget social border-0 pd-0">
      <ul class="social-buttons list-unstyled">
        <li><a href="{{$pengaturan->facebook}}" class="facebook d-flex" target="_blank">
            <div class="icon">                   <i class="fa fa-facebook"></i></div>
            <div class="text d-flex justify-content-between">
              <div class="right"><strong>Facebook</strong></div>
            </div></a></li>



     <li><a href="{{$pengaturan->youtube}}" class="youtube d-flex mb-0" target="_blank">
            <div class="icon">                   <i class="fa fa-youtube-play"></i></div>
            <div class="text d-flex justify-content-between">
              <div class="right"><strong>Youtube</strong></div>
            </div></a></li>
      </ul>

    </div>
    <div class="widget categoris">
      <div class="widget-header"><strong>Kategori</strong></div>
      <div class="widget-body">
        <ul class="categoris-list list-unstyled">
          @foreach ($kategori as $k )
              <li><a href="{{url('kategori',$k->slug)}}" class="d-flex align-items-end justify-content-between"> {{$k->nama}} </a></li>
          @endforeach
        </ul>
      </div>
    </div>

  </div>

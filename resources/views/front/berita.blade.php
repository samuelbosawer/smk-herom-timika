@extends('front.layout.tamplate')
@section('title')
    Berita
 @endsection
@section('content')

    <section class="hero hero-page">
      <div style="background: url(assets-visitor/img/blog-banner.jpg)" class="hero-banner">       </div>
    </section>
    <!-- Blog Listings-->
    <section class="blog-listings">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/beranda')}}">Beranda</a></li>
                <li aria-current="page" class="breadcrumb-item active">Berita</li>
              </ol>
            </nav>
            <h1>Berita</h1>
            <div class="row">
              <p class="col-lg-8">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos.</p>
            </div>
            <div class="row mt-5">
              <div class="col-md-6">
                <div class="blog-post">
                  <div class="image"><img src="assets-visitor/img/blog-img.jpg" alt="Projects aim to help those experiencing mental">
                    <div class="overlay d-flex align-items-center justify-content-center"><a href="blog-post.html" class="btn btn-outline-light">Read More</a></div>
                  </div>
                  <div class="author"><img src="assets-visitor/img/avatar.jpg" alt="author" class="img-fluid"></div>
                  <div class="text bg-gray"><a href="blog-post.html">
                      <h4 class="text-this">Projects aim to help those experiencing mental</h4></a>
                    <ul class="post-meta list-inline">
                      <li class="list-inline-item"><i class="icon-clock-1"></i> 14 August 2017</li>
                      <li class="list-inline-item"><i class="icon-chat"></i>340</li>
                    </ul>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="blog-post">
                  <div class="image"><img src="assets-visitor/img/blog-img-2.jpeg" alt="Projects aim to help those experiencing mental">
                    <div class="overlay d-flex align-items-center justify-content-center"><a href="blog-post.html" class="btn btn-outline-light">Read More</a></div>
                  </div>
                  <div class="author"><img src="assets-visitor/img/avatar.jpg" alt="author" class="img-fluid"></div>
                  <div class="text bg-gray"><a href="blog-post.html">
                      <h4 class="text-this">Projects aim to help those experiencing mental</h4></a>
                    <ul class="post-meta list-inline">
                      <li class="list-inline-item"><i class="icon-clock-1"></i> 14 August 2017</li>
                      <li class="list-inline-item"><i class="icon-chat"></i>340</li>
                    </ul>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="blog-post">
                  <div class="image"><img src="assets-visitor/img/blog-img-3.jpeg" alt="Projects aim to help those experiencing mental">
                    <div class="overlay d-flex align-items-center justify-content-center"><a href="blog-post.html" class="btn btn-outline-light">Read More</a></div>
                  </div>
                  <div class="author"><img src="assets-visitor/img/avatar.jpg" alt="author" class="img-fluid"></div>
                  <div class="text bg-gray"><a href="blog-post.html">
                      <h4 class="text-this">Projects aim to help those experiencing mental</h4></a>
                    <ul class="post-meta list-inline">
                      <li class="list-inline-item"><i class="icon-clock-1"></i> 14 August 2017</li>
                      <li class="list-inline-item"><i class="icon-chat"></i>340</li>
                    </ul>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="blog-post">
                  <div class="image"><img src="assets-visitor/img/blog-img.jpg" alt="Projects aim to help those experiencing mental">
                    <div class="overlay d-flex align-items-center justify-content-center"><a href="blog-post.html" class="btn btn-outline-light">Read More</a></div>
                  </div>
                  <div class="author"><img src="assets-visitor/img/avatar.jpg" alt="author" class="img-fluid"></div>
                  <div class="text bg-gray"><a href="blog-post.html">
                      <h4 class="text-this">Projects aim to help those experiencing mental</h4></a>
                    <ul class="post-meta list-inline">
                      <li class="list-inline-item"><i class="icon-clock-1"></i> 14 August 2017</li>
                      <li class="list-inline-item"><i class="icon-chat"></i>340</li>
                    </ul>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                  </div>
                </div>
              </div>
            </div>
            <nav aria-label="Page navigation example" class="d-flex justify-content-center">
              <ul class="pagination">
                <li class="page-item"><a href="#" aria-label="Previous" class="page-link"><span aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>
                <li class="page-item active"><a href="#" class="page-link">1</a></li>
                <li class="page-item"><a href="#" class="page-link">2</a></li>
                <li class="page-item"><a href="#" class="page-link">3</a></li>
                <li class="page-item"><a href="#" aria-label="Next" class="page-link"><span aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
              </ul>
            </nav>
          </div>
          <div class="col-lg-4">
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
                  <li><a href="#" class="twitter d-flex">
                      <div class="icon">                   <i class="fa fa-twitter"></i></div>
                      <div class="text d-flex justify-content-between">
                        <div class="left"><strong>120K</strong><span>Followers</span></div>
                        <div class="right"><strong>Twitter</strong></div>
                      </div></a></li>
                  <li><a href="#" class="facebook d-flex">
                      <div class="icon">                   <i class="fa fa-facebook"></i></div>
                      <div class="text d-flex justify-content-between">
                        <div class="left"><strong>120K</strong><span>Likes</span></div>
                        <div class="right"><strong>Facebook</strong></div>
                      </div></a></li>
                  <li><a href="#" class="google-plus d-flex">
                      <div class="icon">                   <i class="fa fa-google-plus"></i></div>
                      <div class="text d-flex justify-content-between">
                        <div class="left"><strong>120K</strong><span>Followers</span></div>
                        <div class="right"><strong>Google Plus</strong></div>
                      </div></a></li>
                  <li><a href="#" class="vimeo d-flex">
                      <div class="icon">                   <i class="fa fa-vimeo"></i></div>
                      <div class="text d-flex justify-content-between">
                        <div class="left"><strong>120K</strong><span>Subscribers</span></div>
                        <div class="right"><strong>Vimeo</strong></div>
                      </div></a></li>
                  <li><a href="#" class="youtube d-flex mb-0">
                      <div class="icon">                   <i class="fa fa-youtube-play"></i></div>
                      <div class="text d-flex justify-content-between">
                        <div class="left"><strong>120K</strong><span>Subscribers</span></div>
                        <div class="right"><strong>Youtube</strong></div>
                      </div></a></li>
                </ul>
              </div>
              <div class="widget categoris">
                <div class="widget-header"><strong>Categories</strong></div>
                <div class="widget-body">
                  <ul class="categoris-list list-unstyled">
                    <li><a href="#" class="d-flex align-items-end justify-content-between"><strong>Medicine</strong><strong>30</strong></a></li>
                    <li><a href="#" class="d-flex align-items-end justify-content-between"><strong>Chemistry</strong><strong>41</strong></a></li>
                    <li><a href="#" class="d-flex align-items-end justify-content-between"><strong>Computer Science</strong><strong>312</strong></a></li>
                    <li><a href="#" class="d-flex align-items-end justify-content-between"><strong>Mathematics</strong><strong>70</strong></a></li>
                    <li class="border-bottom-0 pb-0"><a href="#" class="d-flex align-items-end justify-content-between"><strong>Modern Art</strong><strong>65</strong></a></li>
                  </ul>
                </div>
              </div>
              <div class="widget tags">
                <div class="widget-header"><strong>Tags</strong></div>
                <div class="widget-body">
                  <ul class="tags list-inline">
                    <li class="list-inline-item"><a href="#" class="tag">Education</a></li>
                    <li class="list-inline-item"><a href="#" class="tag">Photoshop</a></li>
                    <li class="list-inline-item"><a href="#" class="tag">Photography</a></li>
                    <li class="list-inline-item"><a href="#" class="tag">Online Learning</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection


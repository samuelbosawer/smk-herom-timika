     <!-- ========== Left Sidebar Start ========== -->
     <div class="left-side-menu">

         <div class="h-100" data-simplebar>

             <!--- Sidemenu -->
             <div id="sidebar-menu">

                 <ul id="side-menu">

                     <li>
                         <a href="{{ url('admin/dashboard') }}">
                             <i data-feather="airplay"></i>
                             <span> Dashboard </span>
                         </a>
                     </li>


                     <li>
                         <a href="{{ url('admin/prestasi') }}">
                             <i data-feather="shield"></i>
                             <span> Prestasi </span>
                         </a>
                     </li>
                     <li>
                         <a href="{{ url('admin/alumi') }}">
                             <i data-feather="user"></i>
                             <span> Alumi </span>
                         </a>
                     </li>
                     <li>
                         <a href="{{ url('admin/guru') }}">
                             <i data-feather="user-check"></i>
                             <span> Guru </span>
                         </a>
                     </li>
                     <li>
                         <a href="{{ url('admin/jurusan') }}">
                             <i data-feather="box"></i>
                             <span> Jurusan </span>
                         </a>
                     </li>
                     <li>
                         <a href="{{ url('admin/pengumuman') }}">
                             <i data-feather="book"></i>
                             <span> Pengumuman </span>
                         </a>
                     </li>



                     <li>
                         <a href="#berita" data-toggle="collapse">
                             <i data-feather="book-open"></i>
                             <span> Berita </span>
                             <span class="menu-arrow"></span>
                         </a>
                         <div class="collapse" id="berita">
                             <ul class="nav-second-level">
                                 <li>
                                     <a href="{{ url('admin/berita') }}">Berita</a>
                                 </li>
                                 <li>
                                     <a href="{{ url('admin/kategori') }}">Kategori Berita</a>
                                 </li>
                             </ul>
                         </div>
                     </li>
                     <li>
                         <a href="#galeri" data-toggle="collapse">
                             <i data-feather="camera"></i>
                             <span> Galeri </span>
                             <span class="menu-arrow"></span>
                         </a>
                         <div class="collapse" id="galeri">
                             <ul class="nav-second-level">
                                 <li>
                                     <a href="{{ url('admin/foto') }}">Foto</a>
                                 </li>
                                 <li>
                                     <a href="{{ url('admin/video') }}">Video</a>
                                 </li>
                             </ul>
                         </div>
                     </li>

                     <li>
                         <a href="#profil" data-toggle="collapse">
                             <i data-feather="home"></i>
                             <span> Profil </span>
                             <span class="menu-arrow"></span>
                         </a>
                         <div class="collapse" id="profil">
                             <ul class="nav-second-level">
                                 <li>
                                     <a href="{{ url('admin/profil') }}">Profil</a>
                                 </li>
                                 <li>
                                     <a href="{{ url('admin/visi-misi') }}">Visi & Misi</a>
                                 </li>
                                 <li>
                                     <a href="{{ url('admin/struktur-organisasi') }}">Struktur Organisasi</a>
                                 </li>
                             </ul>
                         </div>
                     </li>




                     <li>
                         <a href="{{ url('admin/pengaturan') }}">
                             <i data-feather="settings"></i>
                             <span> Pengaturan </span>
                         </a>
                     </li>


                 </ul>

             </div>
             <!-- End Sidebar -->

             <div class="clearfix"></div>

         </div>
         <!-- Sidebar -left -->

     </div>
     <!-- Left Sidebar End -->

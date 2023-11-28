<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\DashboardController as Dasbor;
use App\Http\Controllers\Front\PrestasiController as Prestasi;
use App\Http\Controllers\Front\AlumiController as Alumi;
use App\Http\Controllers\Front\BeritaController as Berita;
use App\Http\Controllers\Front\FotoController as Foto;
use App\Http\Controllers\Front\VideoController as Video;
use App\Http\Controllers\Front\ProfilController as Profil;


Route::get('/beranda',[Dasbor::class,'index'])->name('dashboard');
Route::get('/kontak',[Dasbor::class,'kontak'])->name('kontak');
Route::get('/profil',[Profil::class,'index'])->name('profil');
Route::get('/foto-sekolah',[Foto::class,'index'])->name('foto');
Route::get('/video-sekolah',[Video::class,'index'])->name('video');
Route::get('/alumi',[Alumi::class,'index'])->name('alumi');
Route::get('/prestasi',[Prestasi::class,'index'])->name('prestasi');
Route::get('/berita',[Berita::class,'index'])->name('berita');
Route::get('/berita/{slug}',[Berita::class,'show'])->name('berita');


?>

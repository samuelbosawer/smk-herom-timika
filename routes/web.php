<?php

use Illuminate\Support\Facades\Route;


// Admin
use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\Back\PrestasiController;
use App\Http\Controllers\Back\AlumiController;
use App\Http\Controllers\Back\BeritaController;
use App\Http\Controllers\Back\KategoriController;
use App\Http\Controllers\Back\FotoController;
use App\Http\Controllers\Back\VideoController;
use App\Http\Controllers\Back\ProfilController;
use App\Http\Controllers\Back\PengaturanController;
use App\Models\Pengaturan;
use App\Models\Profil;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});


// ADMIN
Route::group(['middleware' => ['role:admin','auth']], function () {
    Route::prefix('admin')->name('admin.')->group(function(){

        // Dashboard
        Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
        Route::get('/',[DashboardController::class,'index'])->name('admin');


         // Prestasi
         Route::get('prestasi',[PrestasiController::class,'index'])->name('prestasi');
         Route::get('prestasi/create',[PrestasiController::class,'create'])->name('prestasi.create');
         Route::delete('prestasi/{id}',[PrestasiController::class,'destrory'])->name('prestasi.delete');
         Route::post('prestasi/storage',[PrestasiController::class,'storage'])->name('prestasi.storage');
         Route::get('prestasi/{id}/edit',[PrestasiController::class,'edit'])->name('prestasi.edit');
         Route::put('prestasi/{id}',[PrestasiController::class,'update'])->name('prestasi.update');


         // Alumi
         Route::get('alumi',[AlumiController::class,'index'])->name('alumi');
         Route::get('alumi/create',[AlumiController::class,'create'])->name('alumi.create');
         Route::delete('alumi/{id}',[AlumiController::class,'destrory'])->name('alumi.delete');
         Route::post('alumi/storage',[AlumiController::class,'storage'])->name('alumi.storage');
         Route::get('alumi/{id}/edit',[AlumiController::class,'edit'])->name('alumi.edit');
         Route::put('alumi/{id}',[AlumiController::class,'update'])->name('alumi.update');


        // Berita
        Route::get('berita',[BeritaController::class,'index'])->name('berita');
        Route::get('berita/create',[BeritaController::class,'create'])->name('berita.create');
        Route::get('berita/{id}',[BeritaController::class,'show'])->name('berita.show');
        Route::delete('berita/{id}',[BeritaController::class,'destrory'])->name('berita.delete');
        Route::post('berita/storage',[BeritaController::class,'storage'])->name('berita.storage');
        Route::get('berita/{id}/edit',[BeritaController::class,'edit'])->name('berita.edit');
        Route::put('berita/{id}',[BeritaController::class,'update'])->name('berita.update');

        // Kategori Berita
        Route::get('kategori',[KategoriController::class,'index'])->name('kategori');
        Route::get('kategori/create',[KategoriController::class,'create'])->name('kategori.create');
        Route::get('kategori/{id}',[KategoriController::class,'show'])->name('kategori.show');
        Route::delete('kategori/{id}',[KategoriController::class,'destrory'])->name('kategori.delete');
        Route::post('kategori/storage',[KategoriController::class,'storage'])->name('kategori.storage');
        Route::get('kategori/{id}/edit',[KategoriController::class,'edit'])->name('kategori.edit');
        Route::put('kategori/{id}',[KategoriController::class,'update'])->name('kategori.update');

        // Foto
        Route::get('foto',[FotoController::class,'index'])->name('foto');
        Route::get('foto/create',[FotoController::class,'create'])->name('foto.create');
        Route::get('foto/{id}',[FotoController::class,'show'])->name('foto.show');
        Route::delete('foto/{id}',[FotoController::class,'destrory'])->name('foto.delete');
        Route::post('foto/storage',[FotoController::class,'storage'])->name('foto.storage');
        Route::get('foto/{id}/edit',[FotoController::class,'edit'])->name('foto.edit');
        Route::put('foto/{id}',[FotoController::class,'update'])->name('foto.update');

        // Video
        Route::get('video',[VideoController::class,'index'])->name('video');
        Route::get('video/create',[VideoController::class,'create'])->name('video.create');
        Route::get('video/{id}',[VideoController::class,'show'])->name('video.show');
        Route::delete('video/{id}',[VideoController::class,'destrory'])->name('video.delete');
        Route::post('video/storage',[VideoController::class,'storage'])->name('video.storage');
        Route::get('video/{id}/edit',[VideoController::class,'edit'])->name('video.edit');
        Route::put('video/{id}',[VideoController::class,'update'])->name('video.update');

        // Pengaturan
        Route::get('pengaturan',[PengaturanController::class,'index'])->name('pengaturan');
        Route::get('pengaturan/create',[PengaturanController::class,'create'])->name('pengaturan.create');
        Route::get('pengaturan/{id}',[PengaturanController::class,'show'])->name('pengaturan.show');
        Route::delete('pengaturan/{id}',[PengaturanController::class,'destrory'])->name('pengaturan.delete');
        Route::post('pengaturan/storage',[PengaturanController::class,'storage'])->name('pengaturan.storage');
        Route::get('pengaturan/{id}/edit',[PengaturanController::class,'edit'])->name('pengaturan.edit');
        Route::put('pengaturan/{id}',[PengaturanController::class,'update'])->name('pengaturan.update');

        // Profil
        Route::get('profil',[ProfilController::class,'index'])->name('profil');
        Route::get('profil/create',[ProfilController::class,'create'])->name('profil.create');
        Route::get('profil/{id}',[ProfilController::class,'show'])->name('profil.show');
        Route::delete('profil/{id}',[ProfilController::class,'destrory'])->name('profil.delete');
        Route::post('profil/storage',[ProfilController::class,'storage'])->name('profil.storage');
        Route::get('profil/{id}/edit',[ProfilController::class,'edit'])->name('profil.edit');
        Route::put('profil/{id}',[ProfilController::class,'update'])->name('video.update');

    });
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

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
use App\Http\Controllers\Back\GuruController;
use App\Http\Controllers\Back\PengumumanController;
use App\Http\Controllers\Back\JurusanController;
// use App\Http\Controllers\Back\PerangkatController;
use App\Models\Perangkat;

// ADMIN
Route::group(['middleware' => ['role:admin', 'auth']], function () {
    Route::prefix('admin')->name('admin.')->group(function () {

        // Dashboard
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/', [DashboardController::class, 'index'])->name('admin');


        // Prestasi
        Route::get('prestasi', [PrestasiController::class, 'index'])->name('prestasi');
        Route::get('prestasi/create', [PrestasiController::class, 'create'])->name('prestasi.create');
        Route::delete('prestasi/{id}', [PrestasiController::class, 'destrory'])->name('prestasi.delete');
        Route::post('prestasi/storage', [PrestasiController::class, 'storage'])->name('prestasi.storage');
        Route::get('prestasi/{id}/edit', [PrestasiController::class, 'edit'])->name('prestasi.edit');
        Route::put('prestasi/{id}', [PrestasiController::class, 'update'])->name('prestasi.update');


        // Alumi
        Route::get('alumi', [AlumiController::class, 'index'])->name('alumi');
        Route::get('alumi/create', [AlumiController::class, 'create'])->name('alumi.create');
        Route::delete('alumi/{id}', [AlumiController::class, 'destrory'])->name('alumi.delete');
        Route::post('alumi/storage', [AlumiController::class, 'storage'])->name('alumi.storage');
        Route::get('alumi/{id}/edit', [AlumiController::class, 'edit'])->name('alumi.edit');
        Route::put('alumi/{id}', [AlumiController::class, 'update'])->name('alumi.update');


        // Berita
        Route::get('berita', [BeritaController::class, 'index'])->name('berita');
        Route::get('berita/create', [BeritaController::class, 'create'])->name('berita.create');
        Route::get('berita/{id}', [BeritaController::class, 'show'])->name('berita.show');
        Route::delete('berita/{id}', [BeritaController::class, 'destrory'])->name('berita.delete');
        Route::post('berita/storage', [BeritaController::class, 'storage'])->name('berita.storage');
        Route::get('berita/{id}/edit', [BeritaController::class, 'edit'])->name('berita.edit');
        Route::put('berita/{id}', [BeritaController::class, 'update'])->name('berita.update');

        // Kategori Berita
        Route::get('kategori', [KategoriController::class, 'index'])->name('kategori');
        Route::get('kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
        // Route::get('kategori/{id}',[KategoriController::class,'show'])->name('kategori.show');
        Route::delete('kategori/{id}', [KategoriController::class, 'destrory'])->name('kategori.delete');
        Route::post('kategori/storage', [KategoriController::class, 'storage'])->name('kategori.storage');
        Route::get('kategori/{id}/edit', [KategoriController::class, 'edit'])->name('kategori.edit');
        Route::put('kategori/{id}', [KategoriController::class, 'update'])->name('kategori.update');

        // Foto
        Route::get('foto', [FotoController::class, 'index'])->name('foto');
        Route::get('foto/create', [FotoController::class, 'create'])->name('foto.create');
        // Route::get('foto/{id}',[FotoController::class,'show'])->name('foto.show');
        Route::delete('foto/{id}', [FotoController::class, 'destrory'])->name('foto.delete');
        Route::post('foto/storage', [FotoController::class, 'storage'])->name('foto.storage');
        Route::get('foto/{id}/edit', [FotoController::class, 'edit'])->name('foto.edit');
        Route::put('foto/{id}', [FotoController::class, 'update'])->name('foto.update');

        // Video
        Route::get('video', [VideoController::class, 'index'])->name('video');
        Route::get('video/create', [VideoController::class, 'create'])->name('video.create');
        // Route::get('video/{id}',[VideoController::class,'show'])->name('video.show');
        Route::delete('video/{id}', [VideoController::class, 'destrory'])->name('video.delete');
        Route::post('video/storage', [VideoController::class, 'storage'])->name('video.storage');
        Route::get('video/{id}/edit', [VideoController::class, 'edit'])->name('video.edit');
        Route::put('video/{id}', [VideoController::class, 'update'])->name('video.update');

        // Pengaturan
        Route::get('pengaturan', [PengaturanController::class, 'index'])->name('pengaturan');
        Route::get('pengaturan/create', [PengaturanController::class, 'create'])->name('pengaturan.create');
        Route::get('pengaturan/{id}', [PengaturanController::class, 'show'])->name('pengaturan.show');
        Route::delete('pengaturan/{id}', [PengaturanController::class, 'destrory'])->name('pengaturan.delete');
        Route::post('pengaturan/storage', [PengaturanController::class, 'storage'])->name('pengaturan.storage');
        Route::get('pengaturan/{id}/edit', [PengaturanController::class, 'edit'])->name('pengaturan.edit');
        Route::put('pengaturan/{id}', [PengaturanController::class, 'update'])->name('pengaturan.update');

        // Profil
        Route::get('profil', [ProfilController::class, 'index'])->name('profil');
        Route::put('profil/{id}', [ProfilController::class, 'update'])->name('profil.update');
        Route::get('visi-misi', [ProfilController::class, 'visi_misi'])->name('visi_misi');
        Route::put('visi-misi/{id}', [ProfilController::class, 'visi_misi_update'])->name('visi-misi.update');
        Route::get('struktur-organisasi', [ProfilController::class, 'struktur'])->name('struktur-organisasi');
        Route::put('struktur-organisasi/{id}', [ProfilController::class, 'struktur_update'])->name('struktur.update');

        // Pengumuman
        Route::get('pengumuman', [PengumumanController::class, 'index'])->name('pengumuman');
        Route::get('pengumuman/create', [PengumumanController::class, 'create'])->name('pengumuman.create');
        // Route::get('pengumuman/{id}',[PengumumanController::class,'show'])->name('pengumuman.show');
        Route::delete('pengumuman/{id}', [PengumumanController::class, 'destrory'])->name('pengumuman.delete');
        Route::post('pengumuman/storage', [PengumumanController::class, 'storage'])->name('pengumuman.storage');
        Route::get('pengumuman/{id}/edit', [PengumumanController::class, 'edit'])->name('pengumuman.edit');
        Route::put('pengumuman/{id}', [PengumumanController::class, 'update'])->name('pengumuman.update');

        // Perangkat
        // Route::get('perangkat', [PerangkatController::class, 'index'])->name('perangkat');
        // Route::get('perangkat/create', [PerangkatController::class, 'create'])->name('perangkat.create');
        // // Route::get('perangkat/{id}',[PerangkatController::class,'show'])->name('perangkat.show');
        // Route::delete('perangkat/{id}', [PerangkatController::class, 'destrory'])->name('perangkat.delete');
        // Route::post('perangkat/storage', [PerangkatController::class, 'storage'])->name('perangkat.storage');
        // Route::get('perangkat/{id}/edit', [PerangkatController::class, 'edit'])->name('perangkat.edit');
        // Route::put('perangkat/{id}', [PerangkatController::class, 'update'])->name('perangkat.update');

        // Guru
        Route::get('guru', [GuruController::class, 'index'])->name('guru');
        Route::get('guru/create', [GuruController::class, 'create'])->name('guru.create');
        // Route::get('guru/{id}',[GuruController::class,'show'])->name('guru.show');
        Route::delete('guru/{id}', [GuruController::class, 'destrory'])->name('guru.delete');
        Route::post('guru/storage', [GuruController::class, 'storage'])->name('guru.storage');
        Route::get('guru/{id}/edit', [GuruController::class, 'edit'])->name('guru.edit');
        Route::put('guru/{id}', [GuruController::class, 'update'])->name('guru.update');

        // Guru
        Route::get('jurusan', [JurusanController::class, 'index'])->name('jurusan');
        // Route::get('jurusan/create', [JurusanController::class, 'create'])->name('jurusan.create');
        Route::get('jurusan/{id}', [JurusanController::class, 'show'])->name('jurusan.show');
        Route::delete('jurusan/{id}', [JurusanController::class, 'destrory'])->name('jurusan.delete');
        // Route::post('jurusan/storage', [JurusanController::class, 'storage'])->name('jurusan.storage');
        Route::get('jurusan/{id}/edit', [JurusanController::class, 'edit'])->name('jurusan.edit');
        Route::put('jurusan/{id}', [JurusanController::class, 'update'])->name('jurusan.update');
    });
});

Auth::routes();


Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

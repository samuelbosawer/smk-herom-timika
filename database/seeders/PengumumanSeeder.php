<?php

namespace Database\Seeders;

use App\Models\Pengumuman;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengumumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pengumuman = Pengumuman::create([
            'judul_pengumuman' => 'Pengumuman',
            'isi_pengumuman' => 'Pengumuman',
            'cover_foto' => 'gambar/foto.jpg',
            'slug' => 'lorem-1',
        ]);

        $pengumuman = Pengumuman::create([
            'judul_pengumuman' => 'Pengumuman',
            'isi_pengumuman' => 'Pengumuman',
            'cover_foto' => 'gambar/foto.jpg',
            'slug' => 'lorem-2',
        ]);

        $pengumuman = Pengumuman::create([
            'judul_pengumuman' => 'Pengumuman',
            'isi_pengumuman' => 'Pengumuman',
            'cover_foto' => 'gambar/foto.jpg',
            'slug' => 'lorem-3',
        ]);
    }
}

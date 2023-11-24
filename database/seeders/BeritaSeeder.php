<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Berita;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Berita::create([
            // 'kategoris_id' => '1',
            'id_kategori' => '1',
            'judul' => 'Lorem Ibsum lor gamores',
            'slug' => 'lorem-1',
            'isi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, necessitatibus!',
            'cover' => 'gambar/foto.jpg',
            'status' => 'Publish'
        ]);

        Berita::create([
            // 'kategoris_id' => '2',
            'id_kategori' => '2',
            'judul' => 'Lorem Ibsum lor gamores',
            'slug' => 'lorem-1',
            'isi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, necessitatibus!',
            'cover' => 'gambar/foto.jpg',
            'status' => 'Draft'
        ]);
    }
}

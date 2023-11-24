<?php

namespace Database\Seeders;

use App\Models\DetailFoto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailFotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $detail = DetailFoto::created([
            "foto" => "gambar/foto.jpg",
            "deks" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, vitae?',
            "id_foto" => 1
        ]);

        $detail = DetailFoto::created([
            "foto" => "gambar/foto.jpg",
            "deks" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, vitae?',
            "id_foto" => 1
        ]);

        $detail = DetailFoto::created([
            "foto" => "gambar/foto.jpg",
            "deks" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, vitae?',
            "id_foto" => 2
        ]);

        $detail = DetailFoto::created([
            "foto" => "gambar/foto.jpg",
            "deks" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, vitae?',
            "id_foto" => 2
        ]);

        $detail = DetailFoto::created([
            "foto" => "gambar/foto.jpg",
            "deks" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, vitae?',
            "id_foto" => 2
        ]);
    }
}

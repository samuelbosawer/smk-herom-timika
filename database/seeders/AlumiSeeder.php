<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumi;

class AlumiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Alumi::create([
            "nama_alumi" => "Samuel",
            "tahun_lulus" => "2013",
            "jurusan" => "Teknik Komputer dan Jaringan",
            "foto" => "gambar/foto.jpg",
            "slug_alumi" => "samuel"
        ]);

        Alumi::create([
            "nama_alumi" => "Novri",
            "tahun_lulus" => "2013",
            "jurusan" => "Teknik Komputer dan Jaringan",
            "foto" => "gambar/foto.jpg",
            "slug_alumi" => "novri"
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Guru;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $foto = Guru::create([
            'nama_guru' => 'Novri K. Mamoto',
            'foto_guru' => 'gambar/foto.jpg',
            'jabatan_guru' => 'Guru TKJ',
        ]);
    }
}

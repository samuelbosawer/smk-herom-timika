<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Foto;

class FotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $foto = Foto::create([
            'judul_foto' => 'Acara perpisahan',
            'foto' => 'gambar/foto.jpg',
            'link_foto' => '',
        ]);

        $foto = Foto::create([
            'judul_foto' => 'Penerimaan Siswa',
            'foto' => 'gambar/foto.jpg',
            'link_foto' => 'https://www.instagram.com/p/CxxRePqPBrx/',
        ]);
    }
}

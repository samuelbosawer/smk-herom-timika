<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jurusan;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jurusan = Jurusan::create([
            'nama_jurusan' => 'GEOLOGI PERTAMBANGAN',
            'profil_jurusan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, perspiciatis!',
            'slug' => 'geologi-pertambangan',
            'warna' => 'red'
        ]);

        $jurusan = Jurusan::create([
            'nama_jurusan' => 'TEKNIK ALAT BERAT',
            'profil_jurusan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, perspiciatis!',
            'slug' => 'teknik-alat-berat',
            'warna' => 'cyan'
        ]);

        $jurusan = Jurusan::create([
            'nama_jurusan' => 'ADMINISTRASI PERKANTORAN',
            'profil_jurusan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, perspiciatis!',
            'slug' => 'administrasi-perkantoran',
            'warna' => 'orange'

        ]);

        $jurusan = Jurusan::create([
            'nama_jurusan' => 'TEKNIK KOMPUTER DAN JARINGAN',
            'profil_jurusan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, perspiciatis!',
            'slug' => 'teknik-konputer-dan-jaringan',
            'warna' => 'abu'

        ]);
    }
}

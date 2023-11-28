<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pengaturan;


class PengaturanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $pengaturan = Pengaturan::create([
            'nama_web' => 'SMKS Hermon Energi Dan Pertambangan Mimika',
            'desk_web' => 'SMKS Hermon Energi Dan Pertambangan Mimika',
            'logo'      => 'gambar/logo.png',
            'nav'      => 'gambar/logo.png',
            'email'      => 'smkhermontimika@gmail.com',
            'alamat_web'      => 'smkpkhermontimika.sch.id',
            'alamat' => 'Jl. Budi Utomo Ujung Jalur SP. 1',
            'no_hp' => '0901324130',

        ]);
    }
}

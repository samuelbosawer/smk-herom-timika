<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Prestasi;


class PrestasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Prestasi::create([
            "nama_prestasi"  => "Lorem ipsum dolor sit amet.",
            "tanggal_prestasi"  => "10/10/2010",
            "keterangan"  => "Lorem ipsum dolor sit amet.",
            "slug_prestasi"  => "Lorem-ipsum-1"
        ]);

        Prestasi::create([
            "nama_prestasi"  => "Lorem ipsum dolor sit amet.",
            "tanggal_prestasi"  => "10/10/2010",
            "keterangan"  => "Lorem ipsum dolor sit amet.",
            "slug_prestasi"  => "Lorem-ipsum-2"
        ]);

        Prestasi::create([
            "nama_prestasi"  => "Lorem ipsum dolor sit amet.",
            "tanggal_prestasi"  => "10/10/2010",
            "keterangan"  => "Lorem ipsum dolor sit amet.",
            "slug_prestasi"  => "Lorem-ipsum-3"
        ]);
    }
}

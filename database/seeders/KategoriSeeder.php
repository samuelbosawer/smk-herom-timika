<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategori::create([
            'nama' => 'kategori 1',
            'slug' => 'kategori-1'
        ]);

        Kategori::create([
            'nama' => 'kategori 2',
            'slug' => 'kategori-2'
        ]);
    }
}

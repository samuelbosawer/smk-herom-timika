<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\DetailFoto;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PrestasiSeeder::class);
        $this->call(AlumiSeeder::class);
        $this->call(KategoriSeeder::class);
        $this->call(BeritaSeeder::class);
        $this->call(FotoSeeder::class);
        $this->call(DetailFotoSeeder::class);
    }
}

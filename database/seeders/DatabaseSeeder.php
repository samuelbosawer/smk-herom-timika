<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\DetailFoto;
use App\Models\Perangkat;
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
        $this->call(VideoSeeder::class);
        $this->call(ProfilSeeder::class);
        $this->call(GuruSeeder::class);
        $this->call(PerangkatSeeder::class);
        $this->call(PengumumanSeeder::class);
        $this->call(JurusanSeeder::class);
        $this->call(PengaturanSeeder::class);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Profil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profil::create([
            'profil' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore incidunt eum ducimus eius exercitationem cum iste, reiciendis sunt possimus minima!'
        ]);
    }
}

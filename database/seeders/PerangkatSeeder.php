<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Perangkat;

class PerangkatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $perangkat = Perangkat::create([
            'perangkat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, quidem.'
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Video;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $video = Video::create([
            'judul_video'  => 'Profil SMK Hermon Timika',
            'link_video'  => 'IjDHbK38e_o'
        ]);


    }
}

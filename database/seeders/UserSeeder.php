<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $admin = User::create([
            'first_name' => 'Admin',
            'last_name' => '',
            'image' => '',
            'email' => 'admin@smkpkhermontimika.sch.id',
            'password' =>  bcrypt('admin@smkpkhermontimika.sch.id')
        ]);

        $admin->assignRole('admin');

       $editor = User::create([
            'first_name' => 'Editor',
            'last_name' => '',
            'image' => '',
            'email' => 'editor@gmail.com',
            'password' =>  bcrypt('editor@gmail.com')
        ]);

        $editor->assignRole('editor');

    }
}

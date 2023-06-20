<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //admin
        User::create([
            'name' => 'admin',
            'nama_opd' => 'diskominfo',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // 'password'
            'is_admin' => true,

        ]);

        //user
        User::create([
            'name' => 'user',
            'nama_opd' => 'user',
            'email' => 'user@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // 'password'
            'is_admin' => false,

        ]);
    }
}

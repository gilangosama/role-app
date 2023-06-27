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
        // User::create([
        //     'name' => 'kecamatan Citamiang',
        //     'nama_opd' => 'kecamatan Citamiang',
        //     'email' => 'kecamatancitamiang@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => bcrypt('password'), // 'password'
        //     'is_admin' => false,

        // ]);

        // User::create([
        //     'name' => 'Kecamatan Cibereum',
        //     'nama_opd' => 'Kecamatan Cibereum',
        //     'email' => 'kecamatancibereum@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => bcrypt('password'), // 'password'
        //     'is_admin' => false,

        // ]);

        // User::create([
        //     'name' => 'Kecamatan Lembursitu',
        //     'nama_opd' => 'Kecamatan Lembursitu',
        //     'email' => 'kecamatanlembursitu@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => bcrypt('password'), // 'password'
        //     'is_admin' => false,

        // ]);

        // ;User::create([
        //     'name' => 'BPBD',
        //     'nama_opd' => 'BPBD',
        //     'email' => 'bpbd@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => bcrypt('password'), // 'password'
        //     'is_admin' => false,

        // ]);User::create([
        //     'name' => 'RSUD Syamsudin',
        //     'nama_opd' => 'RSUD Syamsudin',
        //     'email' => 'rsudsyamsudin@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => bcrypt('password'), // 'password'
        //     'is_admin' => false,

        // ]);

        // User::create([
        //     'name' => 'Al-mulk',
        //     'nama_opd' => 'Al-mulk',
        //     'email' => 'almulk@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => bcrypt('password'), // 'password'
        //     'is_admin' => false,

        // ]);

        // User::create([
        //     'name' => 'Bagian Hukum',
        //     'nama_opd' => 'Bagian Hukum',
        //     'email' => 'bagianhukum@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => bcrypt('password'), // 'password'
        //     'is_admin' => false,

        // ]);

        // User::create([
        //     'name' => 'RSUD Syamsudin',
        //     'nama_opd' => 'RSUD Syamsudin',
        //     'email' => 'rsudsyamsudin@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => bcrypt('password'), // 'password'
        //     'is_admin' => false,

        // ]);
    }
}

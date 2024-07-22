<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('users')->insert([
            [
                'nik' => '1234567890',
                'name' => 'Bagas Priambodo',
                'email' => 'bagas.galaxy@gmail.com',
                'password' => ('bagascrv'),
                'is_admin' => 1,
                'is_mamber' => 0,
                'foto' => 'default.png',
                'alamat' => 'Jalan Anggajaya No.1, Condong Catur, Depok - Sleman, Yogyakarta',
                'tlp' => '081328124459',
                'tglLahir' => '2003-02-22',
                'is_active' => 1,
                'role' => 1,
            ],
        ]);
        DB::table('users')->insert([
            [
                'nik' => '21020649',
                'name' => 'Bagas Priambodo',
                'email' => 'bagas.pri22@students.amikom.ac.id',
                'password' =>  ('bagascrv'),
                'is_admin' => 1,
                'is_mamber' => 0,
                'foto' => 'default.png',
                'alamat' => 'Jalan Anggajaya No.1, Condong Catur, Depok - Sleman, Yogyakarta',
                'tlp' => '081328124459',
                'tglLahir' => '2003-02-22',
                'is_active' => 1,
                'role' => 1,
            ],
        ]);
    }
}

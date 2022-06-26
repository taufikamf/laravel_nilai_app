<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Ananta Dwiyana Sandra',
            'email' => 'anantadwiyana@gmail.com',
            'nomor_identitas' => '11210910000073',
            'role' => 1,
            'password' => Hash::make('Ananta1305')
        ]);

        DB::table('users')->insert([
            'name' => 'Budi',
            'email' => 'budi@gmail.com',
            'nomor_identitas' => '13300190000017',
            'role' => 2,
            'password' => Hash::make('budi123')
        ]);

        DB::table('users')->insert([
            'name' => 'Haifa Syabina',
            'email' => 'haifa@gmail.com',
            'nomor_identitas' => '11210910000055',
            'role' => 3,
            'password' => Hash::make('haifa123')
        ]);
    }
}

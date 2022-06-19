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
            'name' => 'Taufiq A M',
            'email' => 'taufikabdul354@gmail.com',
            'nomor_identitas' => '11210910000023',
            'role' => 1,
            'password' => Hash::make('NotMe354')
        ]);

        DB::table('users')->insert([
            'name' => 'Agus',
            'email' => 'agus@gmail.com',
            'nomor_identitas' => '11210910000017',
            'role' => 2,
            'password' => Hash::make('agus123')
        ]);

        DB::table('users')->insert([
            'name' => 'Fariz A',
            'email' => 'farizalmsyh@gmail.com',
            'nomor_identitas' => '11210910000011',
            'role' => 3,
            'password' => Hash::make('fariz123')
        ]);
    }
}

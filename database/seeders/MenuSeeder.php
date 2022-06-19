<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            'name' => 'User',
            'icon' => 'bx-user',
            'url' => '/user',
            'show_owned' => false
        ]);
        DB::table('menus')->insert([
            'name' => 'Hak Akses',
            'icon' => 'bx-user-check',
            'url' => '/hak-akses',
            'show_owned' => false
        ]);
        DB::table('menus')->insert([
            'name' => 'Nilai',
            'icon' => 'bx-star',
            'url' => '/nilai',
            'show_owned' => true
        ]);
        DB::table('menus')->insert([
            'name' => 'Mata Kuliah',
            'icon' => 'bx-book-open',
            'url' => '/matkul',
            'show_owned' => true
        ]);
        DB::table('menus')->insert([
            'name' => 'Kriteria',
            'icon' => 'bx-menu',
            'url' => '/kriteria',
            'show_owned' => true
        ]);
    }
}

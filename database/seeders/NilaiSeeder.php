<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nilais')->insert([
            'id_matkul' => 1,
            'nilai' => 90,
            'id_user' => 3,
            'id_kriteria' => 2,
        ]);

        DB::table('nilais')->insert([
            'id_matkul' => 1,
            'nilai' => 82,
            'id_user' => 1,
            'id_kriteria' => 2,
        ]);

        DB::table('nilais')->insert([
            'id_matkul' => 3,
            'nilai' => 85,
            'id_user' => 3,
            'id_kriteria' => 4,
        ]);

        DB::table('nilais')->insert([
            'id_matkul' => 2,
            'nilai' => 90,
            'id_user' => 3,
            'id_kriteria' => 3,
        ]);
    }
}

<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class mataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mataKuliahs')->insert([
            'kodeMataKuliah'=>'SYS00001',
            'namaMataKuliah'=>'Pemograman Aplikasi bisnis',
            'sks'=> 4

        ]);
        DB::table('mataKuliahs')->insert([
            'kodeMataKuliah'=>'SYS00002',
            'namaMataKuliah'=>'Pancasila dan dasar Negara',
            'sks'=> 4

        ]);
        DB::table('mataKuliahs')->insert([
            'kodeMataKuliah'=>'SYS00003',
            'namaMataKuliah'=>'Audit dan kontrol Sistem informasi',
            'sks'=> 4

        ]);
        DB::table('mataKuliahs')->insert([
            'kodeMataKuliah'=>'SYS00004',
            'namaMataKuliah'=>'Pemasaran Digital',
            'sks'=> 3
        ]);

        //
    }
}

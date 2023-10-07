<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FamilySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('family')->insert([
            'no_kk' => '3216122002020001',
            'kepala_keluarga' => '3206212209980002',
            'nik_ayah' => '3206212209980002',
            'nik_ibu' => '3206212209990003',
        ]);

        DB::table('family')->insert([
            'no_kk' => '3216122402060002',
            'kepala_keluarga' => '3206212309850003',
            'nik_ayah' => '3206212309850003',
            'nik_ibu' => '3206222609790004',
        ]);

        DB::table('family')->insert([
            'no_kk' => '3216123402070003',
            'kepala_keluarga' => '3206212209950002',
            'nik_ayah' => '3206212209950002',
            'nik_ibu' => '3206213202970002',
        ]);

    }
}

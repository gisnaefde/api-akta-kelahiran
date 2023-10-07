<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('people')->insert([
            'nik' => '3206212209980002',
            'no_kk' => '3216122002020001',
            'nama_lengkap' => 'Budi',
            'jenis_kelamin' => 'L',
            'tempat_lahir' => 'Jakarta',
            'tanggal_lahir' => '1990-01-01',
        ]);

        DB::table('people')->insert([
            'nik' => '3206212209990003',
            'no_kk' => '3216122002020001',
            'nama_lengkap' => 'Susi',
            'jenis_kelamin' => 'P',
            'tempat_lahir' => 'Jakarta',
            'tanggal_lahir' => '1992-01-01',
        ]);

        DB::table('people')->insert([
            'nik' => '3206212309850003',
            'no_kk' => '3216122402060002',
            'nama_lengkap' => 'Arif Gunawan',
            'jenis_kelamin' => 'L',
            'tempat_lahir' => 'Bandung',
            'tanggal_lahir' => '1994-02-09',
        ]);

        DB::table('people')->insert([
            'nik' => '3206222609790004',
            'no_kk' => '3216122402060002',
            'nama_lengkap' => 'Resti Puji',
            'jenis_kelamin' => 'P',
            'tempat_lahir' => 'Garut',
            'tanggal_lahir' => '1998-04-02',
        ]);

        DB::table('people')->insert([
            'nik' => '3206212209950002',
            'no_kk' => '3216123402070003',
            'nama_lengkap' => 'Gandis',
            'jenis_kelamin' => 'L',
            'tempat_lahir' => 'Semarang',
            'tanggal_lahir' => '1994-02-09',
        ]);

        DB::table('people')->insert([
            'nik' => '3206213202970002',
            'no_kk' => '3216123402070003',
            'nama_lengkap' => 'Chika',
            'jenis_kelamin' => 'P',
            'tempat_lahir' => 'Tasikmalaya',
            'tanggal_lahir' => '1997-06-02',
        ]);
    }
}

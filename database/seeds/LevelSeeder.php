<?php

use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('levels')->insert([
            [
                'id' => '1',
                'kode'=>90,
                'posisi_jabatan'=>'DIREKTUR UTAMA',
                'level' => 0,
            ],
    
            [
                'id' => '2',
                'kode'=>82,
                'posisi_jabatan'=>'DIREKTUR',
                'level' => 1,
            ],
            [
                'id' => '3',
                'kode'=>91,
                'posisi_jabatan'=>'KA SESPER',
                'level' => 2,
            ],
    
            [
                'id' => '4',
                'kode'=>74,
                'posisi_jabatan'=>'KADIV',
                'level' => 2,
            ],
            [
                'id' => '5',
                'kode'=>73,
                'posisi_jabatan'=>'KADIV (Non Struktural)',
                'level' => 2,
            ],
            [
                'id' => '6',
                'kode'=>55,
                'posisi_jabatan'=>'DEPUTI KEPALA DEPARTEMEN',
                'level' => 3,
            ],
            [
                'id' => '7',
                'kode'=>63,
                'posisi_jabatan'=>'KADEV',
                'level' => 3,
            ],
            [
                'id' => '8',
                'kode'=>53,
                'posisi_jabatan'=>'KADEP (Non Struktural)',
                'level' => 3,
            ],
            [
                'id' => '9',
                'kode'=>44,
                'posisi_jabatan'=>'KASEK',
                'level' => 4,
            ],
            [
                'id' => '10',
                'kode'=>34,
                'posisi_jabatan'=>'KASEK (Non Struktural)',
                'level' => 4,
            ],
            [
                'id' => '11',
                'kode'=>25,
                'posisi_jabatan'=>'SEKRETARIS I',
                'level' => 4,
            ],
            [
                'id' => '12',
                'kode'=>35,
                'posisi_jabatan'=>'SEKRETARIS II',
                'level' => 4,
            ],
            [
                'id' => '13',
                'kode'=>24,
                'posisi_jabatan'=>'KAUN',
                'level' => 5,
            ],
            [
                'id' => '14',
                'kode'=>23,
                'posisi_jabatan'=>'KAUN (Non Struktural)',
                'level' => 5,
            ],
            [
                'id' => '15',
                'kode'=>22,
                'posisi_jabatan'=>'PK. ASISTEN KAUN',
                'level' => 5,
            ],
            [
                'id' => '16',
                'kode'=>45,
                'posisi_jabatan'=>'SEKRETARIS III',
                'level' => 5,
            ],
            [
                'id' => '17',
                'kode'=>0,
                'posisi_jabatan'=>'PELAKSANA',
                'level' => 7,
            ],
        ]);
    }
}

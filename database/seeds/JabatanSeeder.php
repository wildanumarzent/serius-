<?php

use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jabatan')->insert([
        [
                'id' => '1',
                'kode_jabatan'=>90,
                'nama_jabatan'=>'DIREKTUR UTAMA',
                'level' => "DIRUT",
            ],
    
            [
                'id' => '2',
                'kode_jabatan'=>82,
                'nama_jabatan'=>'DIREKTUR',
                'level' => "DIR",
            ],
            [
                'id' => '3',
                'kode_jabatan'=>91,
                'nama_jabatan'=>'KA SESPER',
                'level' => "KA SESPER",
            ],
    
            [
                'id' => '4',
                'kode_jabatan'=>74,
                'nama_jabatan'=>'KADIV',
                'level' => "KADIV",
            ],
            [
                'id' => '5',
                'kode_jabatan'=>73,
                'nama_jabatan'=>'KADIV (Non Struktural)',
                'level' => "VP",
            ],
            [
                'id' => '6',
                'kode_jabatan'=>55,
                'nama_jabatan'=>'DEPUTI KEPALA DEPARTEMEN',
                'level' => "DEPUTI",
            ],
            [
                'id' => '7',
                'kode_jabatan'=>63,
                'nama_jabatan'=>'KADEV',
                'level' => "KADEP",
            ],
            [
                'id' => '8',
                'kode_jabatan'=>53,
                'nama_jabatan'=>'KADEP (Non Struktural)',
                'level' => "M",
            ],
            [
                'id' => '9',
                'kode_jabatan'=>44,
                'nama_jabatan'=>'KASEK',
                'level' => "KASEK",
            ],
            [
                'id' => '10',
                'kode_jabatan'=>34,
                'nama_jabatan'=>'KASEK (Non Struktural)',
                'level' => "AM",
            ],
            [
                'id' => '11',
                'kode_jabatan'=>25,
                'nama_jabatan'=>'SEKRETARIS I',
                'level' => "SEK-I",
            ],
            [
                'id' => '12',
                'kode_jabatan'=>35,
                'nama_jabatan'=>'SEKRETARIS II',
                'level' => "SEK-II",
            ],
            [
                'id' => '13',
                'kode_jabatan'=>24,
                'nama_jabatan'=>'KAUN',
                'level' => "KAUN",
            ],
            [
                'id' => '14',
                'kode_jabatan'=>23,
                'nama_jabatan'=>'KAUN (Non Struktural)',
                'level' => "SPV",
            ],
            [
                'id' => '15',
                'kode_jabatan'=>22,
                'nama_jabatan'=>'PK. ASISTEN KAUN',
                'level' => "PK.A. KAUN",
            ],
            [
                'id' => '16',
                'kode_jabatan'=>45,
                'nama_jabatan'=>'SEKRETARIS III',
                'level' => "SEK-III",
            ],
            [
                'id' => '17',
                'kode_jabatan'=>0,
                'nama_jabatan'=>'PELAKSANA',
                'level' => "PEL",
            ],
    ]);
    }
}

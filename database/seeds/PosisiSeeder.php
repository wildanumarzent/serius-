<?php

use Illuminate\Database\Seeder;

class PosisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posisi')->insert([
            [
                'id' => '1',
                'nama_posisi' => 'Anak',
            ],
    
            [
                'id' => '2',
                'nama_posisi' => 'Depa',
            ],
            [
                'id' => '3',
                'nama_posisi' => 'Biro',
            ],
    
            [
                'id' => '4',
                'nama_posisi' => 'Dire ',
            ],
            [
                'id' => '5',
                'nama_posisi' => 'Divi',
            ],
            [
                'id' => '6',
                'nama_posisi' => 'Prog',
            ],
            [
                'id' => '7',
                'nama_posisi' => 'Pusa',
            ],
            [
                'id' => '8',
                'nama_posisi' => 'Satu',
            ],
            [
                'id' => '9',
                'nama_posisi' => 'Seks',
            ],
            [
                'id' => '10',
                'nama_posisi' => 'Unit',
            ],
            ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class PangkatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pangkats')->insert([
            [
                'id' => '1',
                'nama_pangkat' => 'VP 2 (19)',
            ],
    
            [
                'id' => '2',
                'nama_posisi' => 'Senior VP (20)',
            ],
            [
                'id' => '3',
                'nama_posisi' => 'VP 1 (18)',
            ],
    
            [
                'id' => '4',
                'nama_posisi' => 'Supervisor (13)',
            ],
            [
                'id' => '5',
                'nama_posisi' => 'Asisten Spv (12) ',
            ],
            [
                'id' => '6',
                'nama_posisi' => 'Sub-manager (14)',
            ],
            [
                'id' => '7',
                'nama_posisi' => 'Senior Staff (11)',
            ],
            [
                'id' => '8',
                'nama_posisi' => 'Senior Manager (17)',
            ],
            [
                'id' => '9',
                'nama_posisi' => 'Asisten Manager (15) ',
            ],
            [
                'id' => '10',
                'nama_posisi' => 'Staff-3 (9)',
            ]
        ]);
    }
}

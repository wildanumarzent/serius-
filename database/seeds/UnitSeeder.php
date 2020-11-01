<?php

use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('units')->insert([
            [
                'id' => '1',
                'kode_unit'=>'99997',
                'unit_kerja' => 'Dewan Pengawas',
            ],
    
            [
                'id' => '2',
                'kode_unit'=>'10000',
                'unit_kerja' => 'Direktorat Utama',
            ],
            [
                'id' => '3',
                'kode_unit'=>'11000',
                'unit_kerja' => 'Satuan Pengawasan Intern',
            ],
    
            [
                'id' => '4',
                'kode_unit'=>'20000',
                'unit_kerja' => 'Direktorat Pengembangan Usaha',
            ],
            [
                'id' => '5',
                'kode_unit'=>'21000',
                'unit_kerja' => 'Sales and Marketing Division',
            ],
    
            [
                'id' => '6',
                'kode_unit'=>'21C00',
                'unit_kerja' => 'Marketing Department',
            ],
            [
                'id' => '7',
                'kode_unit'=>'30000',
                'unit_kerja' => 'Direktorat Operasi',
            ],
    
            [
                'id' => '8',
                'kode_unit'=>'31000',
                'unit_kerja' => 'Divisi Teknik dan Jaminan Keandalan',
            ],
            [
                'id' => '9',
                'kode_unit'=>'31A00',
                'unit_kerja' => 'Departemen Laboratorium ',
            ],
            [
                'id' => '10',
                'kode_unit' => '33C20',
                'unit_kerja' => 'Biro Risk Management and Compliance',
            ],
            [
                'id' => '11',
                'kode_unit'=>'33C22',
                'unit_kerja' => 'Unit Cetak Pita Cukai MMEA (Shift - 1,2)',
            ],
    
            [
                'id' => '12',
                'kode_unit'=>'33C41',
                'unit_kerja' => 'Unit Cetak Materai (Shift – 1, 2)',
            ],
            [
                'id' => '13',
                'kode_unit'=>'33C42',   
                'unit_kerja' => 'Unit Cetak Dokumen Sekuriti',
            ],
    
            [
                'id' => '14',
                'kode_unit'=>'33D30',
                'unit_kerja' => 'Seksi Khazanah Produksi Akhir ',
            ],
          
            ]);
    }
}

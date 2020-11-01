<?php

use Illuminate\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('karyawans')->insert([
            [
                'id' => 1,
                'np' => 7774,
                'full_name' => 'FADHILLA PUJI CAHYANI',
                'tanggal_lahir' => '11/2/1995',
                'tanggal_masuk' => '12/1/2051',
                'tanggal_mpp' => '8/19/2019',
                'tanggal_pensiun' => '9/1/2051',
                'jabatan_id' => 1,
                'unit_kerja_id' => 2,
                'posisi_id' => 9,
                'pangkat_id' =>1,
                'grade' => 9,
                'T_to_pensiun' => 375,
                'brithplace' =>'BOGOR',
                'Tmt' =>'11/19/2019',
                'level_id' =>1,
            ],
            [
                'id' => 2,
                'np' => 6186,
                'full_name' => 'ADE PERMANA',
                'tanggal_lahir' => '3/13/1970',
                'tanggal_masuk' => '12/1/2051',
                'tanggal_mpp' => '8/19/2019',
                'tanggal_pensiun' => '9/1/2051',
                'jabatan_id' => 1,
                'unit_kerja_id' => 1,
                'posisi_id' => 1,
                'pangkat_id' =>1,
                'grade' => 1,
                'T_to_pensiun' => 375,
                'brithplace' =>'BOGOR',
                'Tmt' =>'11/19/2019',
                'level_id' =>1,
            ],
            [
                'id' => 3,
                'np' => 6192,
                'full_name' => 'PRAMONO',
                'tanggal_lahir' => '11/2/1995',
                'tanggal_masuk' => '12/1/2051',
                'tanggal_mpp' => '8/19/2019',
                'tanggal_pensiun' => '9/1/2051',
                'jabatan_id' => 2,
                'unit_kerja_id' => 1,
                'posisi_id' => 1,
                'pangkat_id' =>1,
                'grade' => 19,
                'T_to_pensiun' => 375,
                'brithplace' =>'BOGOR',
                'Tmt' =>'11/19/2019',
                'level_id' =>2,
            ],
            [
                'id' => 4,
                'np' => 6483,
                'full_name' => 'SARI PUSPITANINGRUM',
                'tanggal_lahir' => '11/2/1995',
                'tanggal_masuk' => '12/1/2051',
                'tanggal_mpp' => '8/19/2019',
                'tanggal_pensiun' => '9/1/2051',
                'jabatan_id' => 3,
                'unit_kerja_id' => 1,
                'posisi_id' =>2,
                'pangkat_id' =>3,
                'grade' => 29,
                'T_to_pensiun' => 375,
                'brithplace' =>'BOGOR',
                'Tmt' =>'11/19/2019',
                'level_id' =>3,
            ],
            [
                'id' => 5,
                'np' => 7537,
                'full_name' => 'NOVA AMELIA BUNTANG',
                'tanggal_lahir' => '11/2/1995',
                'tanggal_masuk' => '12/1/2051',
                'tanggal_mpp' => '8/19/2019',
                'tanggal_pensiun' => '9/1/2051',
                'jabatan_id' => 4,
                'unit_kerja_id' => 2,
                'posisi_id' => 2,
                'pangkat_id' =>3,
                'grade' => 99,
                'T_to_pensiun' => 375,
                'brithplace' =>'BOGOR',
                'Tmt' =>'11/19/2019',
                'level_id' =>3,
            ],
            [
                'id' => 6,
                'np' => 7538,
                'full_name' => 'VIVI CAROLINA ALTHEA HUTAGAOL',
                'tanggal_lahir' => '11/2/1995',
                'tanggal_masuk' => '12/1/2051',
                'tanggal_mpp' => '8/19/2019',
                'tanggal_pensiun' => '9/1/2051',
                'jabatan_id' => 4,
                'unit_kerja_id' => 2,
                'posisi_id' => 9,
                'pangkat_id' =>1,
                'grade' => 9,
                'T_to_pensiun' => 375,
                'brithplace' =>'BOGOR',
                'Tmt' =>'11/19/2019',
                'level_id' =>3,
            ],
            [
                'id' => 7,
                'np' => 7544,
                'full_name' => 'MUHAMMAD ERFO PRTAMA',
                'tanggal_lahir' => '11/2/1995',
                'tanggal_masuk' => '12/1/2051',
                'tanggal_mpp' => '8/19/2019',
                'tanggal_pensiun' => '9/1/2051',
                'jabatan_id' => 5,
                'unit_kerja_id' => 3,
                'posisi_id' => 2,
                'pangkat_id' =>4,
                'grade' => 59,
                'T_to_pensiun' => 375,
                'brithplace' =>'BOGOR',
                'Tmt' =>'11/19/2019',
                'level_id' =>3,
            ],
            [
                'id' => 8,
                'np' => 5646,
                'full_name' => 'BAMBANG SUGENG R.',
                'tanggal_lahir' => '11/2/1995',
                'tanggal_masuk' => '12/1/2051',
                'tanggal_mpp' => '8/19/2019',
                'tanggal_pensiun' => '9/1/2051',
                'jabatan_id' => 6,
                'unit_kerja_id' => 3,
                'posisi_id' => 2,
                'pangkat_id' =>4,
                'grade' => 59,
                'T_to_pensiun' => 375,
                'brithplace' =>'BOGOR',
                'Tmt' =>'11/19/2019',
                'level_id' =>3,
            ],
            [
                'id' => 9,
                'np' => 5968,
                'full_name' => 'DEDDY HERMAWAN',
                'tanggal_lahir' => '11/2/1995',
                'tanggal_masuk' => '12/1/2051',
                'tanggal_mpp' => '8/19/2019',
                'tanggal_pensiun' => '9/1/2051',
                'jabatan_id' => 6,
                'unit_kerja_id' => 2,
                'posisi_id' => 4,
                'pangkat_id' =>3,
                'grade' => 9,
                'T_to_pensiun' => 375,
                'brithplace' =>'BOGOR',
                'Tmt' =>'11/19/2019',
                'level_id' =>4,
            ],
            [
                'id' => 10,
                'np' => 7243,
                'full_name' => 'DESLINA PINEM',
                'tanggal_lahir' => '11/2/1995',
                'tanggal_masuk' => '12/1/2051',
                'tanggal_mpp' => '8/19/2019',
                'tanggal_pensiun' => '9/1/2051',
                'jabatan_id' => 3,
                'unit_kerja_id' => 2,
                'posisi_id' => 9,
                'pangkat_id' =>6,
                'grade' => 9,
                'T_to_pensiun' => 375,
                'brithplace' =>'BOGOR',
                'Tmt' =>'11/19/2019',
                'level_id' =>5,
            ],
            [
                'id' => 11,
                'np' => 7535,
                'full_name' => 'DEDI KURNIAWAN',
                'tanggal_lahir' => '11/2/1995',
                'tanggal_masuk' => '12/1/2051',
                'tanggal_mpp' => '8/19/2019',
                'tanggal_pensiun' => '9/1/2051',
                'jabatan_id' => 8,
                'unit_kerja_id' => 2,
                'posisi_id' => 9,
                'pangkat_id' =>1,
                'grade' => 9,
                'T_to_pensiun' => 375,
                'brithplace' =>'BOGOR',
                'Tmt' =>'11/19/2019',
                'level_id' =>1,
            ],
            [
                'id' => 12,
                'np' => 7545,
                'full_name' => 'HANI SABRINA',
                'tanggal_lahir' => '11/2/1995',
                'tanggal_masuk' => '12/1/2051',
                'tanggal_mpp' => '8/19/2019',
                'tanggal_pensiun' => '9/1/2051',
                'jabatan_id' => 2,
                'unit_kerja_id' => 2,
                'posisi_id' => 2,
                'pangkat_id' =>2,
                'grade' => 9,
                'T_to_pensiun' => 375,
                'brithplace' =>'BOGOR',
                'Tmt' =>'11/19/2019',
                'level_id' =>2,
            ],
            [
                'id' => 13,
                'np' => 7546,
                'full_name' => 'RIZKI TAMAYANTI',
                'tanggal_lahir' => '11/2/1995',
                'tanggal_masuk' => '12/1/2051',
                'tanggal_mpp' => '8/19/2019',
                'tanggal_pensiun' => '9/1/2051',
                'jabatan_id' => 3,
                'unit_kerja_id' => 3,
                'posisi_id' => 3,
                'pangkat_id' =>3,
                'grade' => 9,
                'T_to_pensiun' => 375,
                'brithplace' =>'BOGOR',
                'Tmt' =>'11/19/2019',
                'level_id' =>3,
            ],
            
            [
                'id' => 14,
                'np' => 6362,
                'full_name' => 'JAROT BUJONO',
                'tanggal_lahir' => '11/2/1995',
                'tanggal_masuk' => '12/1/2051',
                'tanggal_mpp' => '8/19/2019',
                'tanggal_pensiun' => '9/1/2051',
                'jabatan_id' => 4,
                'unit_kerja_id' => 4,
                'posisi_id' => 4,
                'pangkat_id' => 4,
                'grade' => 9,
                'T_to_pensiun' => 375,
                'brithplace' =>'BOGOR',
                'Tmt' =>'11/19/2019',
                'level_id' =>4,
            ],
            [
                'id' => 15,
                'np' => 7509,
                'full_name' => 'ARHAM MAULANA',
                'tanggal_lahir' => '11/2/1995',
                'tanggal_masuk' => '12/1/2051',
                'tanggal_mpp' => '8/19/2019',
                'tanggal_pensiun' => '9/1/2051',
                'jabatan_id' => 5,
                'unit_kerja_id' => 5,
                'posisi_id' => 5,
                'pangkat_id' =>5,
                'grade' => 59,
                'T_to_pensiun' => 375,
                'brithplace' =>'BOGOR',
                'Tmt' =>'11/19/2019',
                'level_id' =>5,
            ],
            [
                'id' => 16,
                'np' => 5795,
                'full_name' => 'FERY GAMAL',
                'tanggal_lahir' => '11/2/1995',
                'tanggal_masuk' => '12/1/2051',
                'tanggal_mpp' => '8/19/2019',
                'tanggal_pensiun' => '9/1/2051',
                'jabatan_id' => 6,
                'unit_kerja_id' => 6,
                'posisi_id' => 6,
                'pangkat_id' =>6,
                'grade' => 69,
                'T_to_pensiun' => 375,
                'brithplace' =>'BOGOR',
                'Tmt' =>'11/19/2019',
                'level_id' =>6,
            ],
            [
                'id' => 17,
                'np' => 7547,
                'full_name' => 'VERYAL ANA FITRI',
                'tanggal_lahir' => '11/2/1995',
                'tanggal_masuk' => '12/1/2051',
                'tanggal_mpp' => '8/19/2019',
                'tanggal_pensiun' => '9/1/2051',
                'jabatan_id' => 7,
                'unit_kerja_id' => 7,
                'posisi_id' => 7,
                'pangkat_id' =>7,
                'grade' => 79,
                'T_to_pensiun' => 375,
                'brithplace' =>'BOGOR',
                'Tmt' =>'11/19/2019',
                'level_id' =>7,
            ],
            [
                'id' => 18,
                'np' => 7587,
                'full_name' => 'ADI PURNOMO',
                'tanggal_lahir' => '11/2/1995',
                'tanggal_masuk' => '12/1/2051',
                'tanggal_mpp' => '8/19/2019',
                'tanggal_pensiun' => '9/1/2051',
                'jabatan_id' => 8,
                'unit_kerja_id' => 8,
                'posisi_id' => 8,
                'pangkat_id' =>8,
                'grade' => 89,
                'T_to_pensiun' => 375,
                'brithplace' =>'BOGOR',
                'Tmt' =>'11/19/2019',
                'level_id' =>8,
            ],
            [
                'id' => 19,
                'np' => 6199,
                'full_name' => 'MUNAWAR HADI S.',
                'tanggal_lahir' => '11/2/1995',
                'tanggal_masuk' => '12/1/2051',
                'tanggal_mpp' => '8/19/2019',
                'tanggal_pensiun' => '9/1/2051',
                'jabatan_id' => 9,
                'unit_kerja_id' => 9,
                'posisi_id' => 9,
                'pangkat_id' =>9,
                'grade' => 99,
                'T_to_pensiun' => 375,
                'brithplace' =>'BOGOR',
                'Tmt' =>'11/19/2019',
                'level_id' =>9,
            ],
            [
                'id' => 20,
                'np' => 7543,
                'full_name' => 'NANDA FARA NADIA PERMATA SARI',
                'tanggal_lahir' => '11/2/1995',
                'tanggal_masuk' => '12/1/2051',
                'tanggal_mpp' => '8/19/2019',
                'tanggal_pensiun' => '9/1/2051',
                'jabatan_id' => 10,
                'unit_kerja_id' => 10,
                'posisi_id' => 10,
                'pangkat_id' =>10,
                'grade' => 90,
                'T_to_pensiun' => 375,
                'brithplace' =>'BOGOR',
                'Tmt' =>'11/19/2019',
                'level_id' =>10,
            ],
        ]);
    }
}

<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class KaryawanRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'np' => ['required', 'integer', Rule::unique('karyawans', 'np')->ignore($this->karyawan)],
            'full_name' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'tanggal_masuk' => 'required|date',
            'tanggal_mpp' => 'required|date',
            'tanggal_pensiun' => 'required|date',
            'jabatan_id' => 'required|integer',
            'unit_kerja_id' => 'required|integer',
            'posisi_id' => 'required|integer',
            'pangkat_id' => 'required|integer',
            'grade' => 'required|integer',
            'T_to_pensiun' => 'required|integer',
            'brithplace' => 'required|string',
            'Tmt' => 'required|max:50',
            'level_id' => 'max:10'
         
        ];
    }
}
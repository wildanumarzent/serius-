<?php

namespace App\Models\Position;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $table = 'posisi';
    protected $fillable = ['nama_posisi'];

    public function karyawans(){
        return $this->hasMany('App\Models\Karyawan');
    }
    
}
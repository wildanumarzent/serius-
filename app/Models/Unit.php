<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{

    protected $fillable=['unit_kerja'];

    public function karyawans(){
        return $this->hasMany('App\Models\Karyawan');
    }
}
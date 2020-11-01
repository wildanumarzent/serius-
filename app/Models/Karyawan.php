<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $fillable =['np','full_name','tanggal_lahir','tanggal_masuk'
                            ,'tanggal_mpp','tanggal_pensiun','jabatan_id','unit_kerja_id','posisi_id','pangkat_id'
                            ,'grade','T_to_pensiun','brithplace','Tmt','level_id'];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::Class);
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function position()
    {
        return $this->belongsTo(Position\Position::class,'posisi_id');
    }
    
    public function unit()
    {
        return $this->belongsTo(Unit::class,'unit_kerja_id');
    }

    public function pangkat()
    {
        return $this->belongsTo(Pangkat::class);
    }
}
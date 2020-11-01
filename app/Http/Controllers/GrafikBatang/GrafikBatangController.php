<?php

namespace App\Http\Controllers\grafikBatang;

use App\Http\Controllers\Controller;
use App\Models\{Karyawan,Unit,Level};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GrafikBatangController extends Controller
{
    // public function index(){
    // //    print_r($params);
    // //    exit;
    //     $data_karyawan=Karyawan::all();
    //     $unit=Unit::all();
    //     $data_karyawan = json_encode($data_karyawan);
    //     //print($data_karyawan);exit;
    //     $url='grafik';
    //     return view('pages.admin.grafik.grafikBatang',compact('data_karyawan','unit','url'));
       
    // }

    public function index(Request $params){
        $data_karyawan=Karyawan::where('unit_kerja_id',$params->id)->get();
        $unit=Unit::all();
        $url='grafik';
        $levels = Level::all(); 
        $data = array();
        $i = 0;  
        foreach ($levels as $level ) {
           $data['label'][$i] = $level->posisi_jabatan; 
            $data['data'][$level->level] = 0;
            foreach ($data_karyawan as $karyawan ) {
                if($level->id == $karyawan->level_id){
                    $data['data'][$level->level] = $data['data'][$level->level]+1;
                }
            } 
            $i++;
            
        }   
        $label = json_encode($data['label']) ;
        $dataGrafik = json_encode($data['data']) ;

        // print_r($label);
        // exit;

        return view('pages.admin.grafik.grafikBatang',compact('data_karyawan','unit','url','label','dataGrafik'));
           
    }

    // public function batang(Request $params){
    //         // echo $params->id;
    //         // exit;
    //     $data_karyawan=Karyawan::where('unit_kerja_id',$params->id)->get();
    //     // $unit=Unit::all();
    //     // $data_karyawan = DB::table('karyawans')
    //     //     ->join('levels', 'karyawans.level_id', '=', 'levels.id')
    //     //     ->where('unit_kerja_id','=',$params->id)->get();


    //     $data_unit = Level::all(); 
    //     $data = array();
    //     $i = 0;  
    //     foreach ($data_unit as $unit ) {
    //         $data['label'][$i] = $unit->level; 
    //         $data['data'][$unit->level] = 0;
    //         foreach ($data_karyawan as $karyawan ) {
    //             if($unit->id == $karyawan->level_id){
    //                 $data['data'][$unit->level] = $data['data'][$unit->level]+1;
    //             }
    //         } 
    //         $i++;
    //     }    
    //     print_r($data);exit;

    //     $data_karyawan = json_encode($data_karyawan);
    //     //print($data_karyawan);exit;
    //     // $url='grafik';
    //     return $data_karyawan ;
        
    // }
}
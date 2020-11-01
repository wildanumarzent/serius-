<?php

namespace App\Http\Controllers\GrafikBatang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GrafikJabatanController extends Controller
{
    public function index(){
       $url="grafikJabatan";
       return view('pages.admin.grafik.jabatan.index');
    }
}

<?php

namespace App\Http\Controllers\GrafikBatang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GrafikPangkatController extends Controller
{
    public function index(){
        $url="grafikPangkat";
       return view('pages.admin.grafik.pangkat.index');
    }
}

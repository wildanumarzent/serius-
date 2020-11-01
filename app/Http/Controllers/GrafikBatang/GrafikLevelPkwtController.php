<?php

namespace App\Http\Controllers\GrafikBatang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GrafikLevelPkwtController extends Controller
{
    public function index(){
        $url="grafikLevelPkwt";
        return view('pages.admin.grafik.grafikLevelPkwt.grafikLevelPkwt', compact('url'));
    }
}

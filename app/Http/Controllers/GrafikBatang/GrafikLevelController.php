<?php

namespace App\Http\Controllers\GrafikBatang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GrafikLevelController extends Controller
{
    public function index(){
        return view("pages.admin.grafik.level.index");
    }
}

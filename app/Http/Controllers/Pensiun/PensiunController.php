<?php

namespace App\Http\Controllers\Pensiun;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PensiunController extends Controller
{
    public function index(){
        return view('pages.admin.pensiun.index');
    }
}

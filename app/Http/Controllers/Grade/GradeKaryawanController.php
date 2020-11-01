<?php

namespace App\Http\Controllers\Grade;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GradeKaryawanController extends Controller
{
    public function index(){
        return view('pages.admin.gradeKaryawan.index');
    }
    public function nilaiNki(){
        return view('pages.admin.gradeKaryawan.nilaiNki');
    }
    public function sertifikasi(){
        return view('pages.admin.gradeKaryawan.sertifikasi');
    }
    
}

<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route Khusus Karyawan
Route::prefix('/karyawan')->group(function (){

    Route::get('/show', 'Karyawan\KaryawanController@index')->name('karyawan');

    Route::get('/add', 'Karyawan\KaryawanController@create');

    Route::post('store', 'Karyawan\KaryawanController@store');

    Route::get('/edit/{karyawan}', 'Karyawan\KaryawanController@edit');

    Route::patch('/update/{karyawan}', 'Karyawan\KaryawanController@update');

    Route::resource('/delete', 'Karyawan\KaryawanController');

    // kariawan pkwt
    Route::resource('showPkwt', 'Karyawan\KaryawanPkwtController');
    Route::get('detailtugas', 'Karyawan\KaryawanPkwtController@detailTugas');

    Route::get('/addPkwt', 'Karyawan\KaryawanPkwtController@create');

    Route::post('storePkwt', 'Karyawan\KaryawanPkwtController@store');

    Route::get('/editPkwt/{karyawan}', 'Karyawan\KaryawanPkwtController@edit');

    Route::patch('/updatePkwt/{karyawan}', 'Karyawan\KaryawanPkwtController@update');

    Route::resource('/deletePkwt', 'Karyawan\KaryawanPkwtController');
});

//Manajement SDM
Route::resource('jabatan', 'Menej_sdm\Jabatan\JabatanController');
Route::resource('pangkat', 'Menej_sdm\Pangkat\PangkatController');
Route::resource('unit', 'Menej_sdm\Unit\UnitController');
Route::resource('position', 'Position\PositionController');
Route::resource('level', 'Menej_sdm\level\LevelController');
Route::get('/control_pensiun', 'ControlpensiunController@index')->name('control_pensiun');
Route::get('/level_operator', 'LevelopeatorController@index')->name('level_operator');

// route graafik
// Route::get('/grafikBatang/{id}', 'GrafikBatang\GrafikBatangController@index');
Route::resource('grafikJabatan', 'GrafikBatang\GrafikJabatanController');
Route::resource('grafikLevel', 'GrafikBatang\GrafikLevelController');
Route::resource('grafikPangkat', 'GrafikBatang\GrafikPangkatController');
Route::resource('grafikPkwt', 'GrafikBatang\GrafikPkwtController');
Route::resource('grafikPhie', 'grafikPhie\GrafikPhieController');
// /route graafik

// master pkwt
Route::resource('kodeBagan', 'Pkwt\KodeBaganController');
Route::resource('status', 'Pkwt\SetatusController');
Route::resource('nomorSp', 'Pkwt\NomorSpController');
Route::resource('unitPkwt', 'Pkwt\UnitController');


Route::resource('gradeKaryawan', 'Grade\GradeKaryawanController');
Route::get('nilaiNki', 'Grade\GradeKaryawanController@nilaiNki');
Route::get('sertifikasi', 'Grade\GradeKaryawanController@sertifikasi');
Route::resource('promosi', 'Promosi\PromosiController');
Route::resource('pensiun', 'Pensiun\PensiunController');

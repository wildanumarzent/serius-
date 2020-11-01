<?php

namespace App\Http\Controllers\Karyawan;

use App\Http\Controllers\Controller;
use App\Models\KaryawanPkwt;
use App\Models\Pkwt\{KodeBagans,NomorSp,Setatus,UnitPkwt};
use Illuminate\Http\Request;

class KaryawanPkwtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url ='karyawanPkwt';
        return view('pages.admin.KaryawanPkwt.index', compact('url'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $KodeBagans = KodeBagans::all();
        $NomorSp = NomorSp::all();
        $Setatus = Setatus::all();
        $unit=UnitPkwt::all();
        $url = 'karyawanPkwt';
        $action = $url.'/store';
        $button = 'Save';
        return view('pages.admin.KaryawanPkwt.add',compact('url','action','KodeBagans','NomorSp','Setatus','button','unit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function detailTugas(){
    
        return view('pages.admin.KaryawanPkwt.detailTugas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KaryawanPkwt  $karyawanPkwt
     * @return \Illuminate\Http\Response
     */
    public function show(KaryawanPkwt $karyawanPkwt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KaryawanPkwt  $karyawanPkwt
     * @return \Illuminate\Http\Response
     */
    public function edit(KaryawanPkwt $karyawanPkwt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KaryawanPkwt  $karyawanPkwt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KaryawanPkwt $karyawanPkwt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KaryawanPkwt  $karyawanPkwt
     * @return \Illuminate\Http\Response
     */
    public function destroy(KaryawanPkwt $karyawanPkwt)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Karyawan;

use App\Http\Controllers\Controller;
use App\Models\{Karyawan,Jabatan,Pangkat,Unit,Level};
use App\Models\Position\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\KaryawanRequest;

class KaryawanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        
        // if ($request->ajax()) {
        //     $karyawan = Karyawan::with(['level','jabatan','position','pangkat','unit'])->latest()->get();
        //     return datatables()->of($karyawan)
        //     ->addIndexColumn()
        //     ->addColumn('action', function($data){
        //         $button = '<a href="http://localhost:8000/karyawan/edit/'.$data->id.'" data-toggle="tooltip" class="btn btn-info btn-sm"><i class="ti-pencil-alt"></i></a>';
        //         $button .= '&nbsp;&nbsp;';
        //         $button .= '&nbsp;&nbsp;';
        //         $button .= '<button  name="delete" id="'.$data->id.'"class="delete btn btn-danger btn-sm"><i class="ti-trash"></i></a>';
        //         return $button;
        //     })
        //     ->addColumn('jabatan_id', function($data){
        //         return isset($data->jabatan) ? $data->jabatan->nama_jabatan : '-';    
        //     })
        //     ->addColumn('pangkat_id', function($data){
        //         return isset($data->pangkat) ? $data->pangkat->nama_pangkat: '-';
        //     })
        //     ->addColumn('level_id', function($data){
        //         return isset($data->level) ? $data->level->level: '-';
        //     })
        //     ->addColumn('unit_kerja_id', function($data){
        //         return isset($data->unit) ? $data->unit->unit_kerja: '-';
        //     })
        //     ->addColumn('posisi_id', function($data){
        //         return isset($data->position) ? $data->position->nama_posisi: '-';
        //     })
        //     ->addColumn('tanggal_mpp', function($data){
        //         return '<h6>' .$data->tanggal_mpp.'<span class="badge badge-secondary">New</span></h6>';
        //     })
        //     ->rawColumns(['action','jabatan_id','unit_kerja_id','posisi_id','pangkat_id','level_id','tanggal_mpp'])
        //     ->make(true);
        // }
        $url = 'karyawan';
        return view('pages.admin.KaryawanOrganik.index', compact('url'));
        
    }
    
    public function create()
    {
        $jabatans = Jabatan::all();
        $pangkats = Pangkat::all();
        $units = Unit::all();
        $positions = Position::all();
        $levels = Level::all();
        $url = 'karyawan';
        $action = $url.'/store';
        $button = 'Save';
        return view('backup.pages.admin.Karyawan.organik.add', compact('url', 'action', 'button','jabatans','pangkats','units','positions', 'levels'));
    }
    public function store(KaryawanRequest $request)
    {
        echo $request['jabatan_id'];
       
        $data = new Karyawan();
        $data->np = $request->np;
        $data->full_name = $request->full_name;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->tanggal_masuk = $request->tanggal_masuk;
        $data->tanggal_mpp = $request->tanggal_mpp;
        $data->tanggal_pensiun = $request->tanggal_pensiun;
        $data->jabatan_id = $request->jabatan_id;
        $data->unit_kerja_id = $request->unit_kerja_id;
        $data->posisi_id = $request->posisi_id;
        $data->pangkat_id = $request->pangkat_id;
        $data->grade = $request->grade;
        $data->T_to_pensiun = $request->T_to_pensiun;
        $data->Tmt = $request->Tmt;
        $data->brithplace = $request->brithplace;
        $data->level_id = $request->level_id;
        $data->save();

        return redirect('karyawan/show')->with('success','Data Berhasil Di Simpan');
    }
    public function show($id)
    {
        //
    }
    public function edit(Karyawan $karyawan)
    {
        $jabatans = Jabatan::all();
        $pangkats = Pangkat::all();
        $units = Unit::all();
        $positions = Position::all();
        $levels = Level::all();
        $url = 'karyawan';
        $action = $url.'/update/'.$karyawan->id;
        $button = 'Update';
        return view('pages.admin.Karyawan.organik.add', compact('karyawan', 'url', 'action', 'button', 'jabatans','pangkats','units','positions', 'levels'));
    }
    public function update(KaryawanRequest $request, Karyawan $karyawan)
    {
        $karyawan->update([
            'np' => $request['np'],
            'full_name' => $request['full_name'],
            'tanggal_lahir' => $request['tanggal_lahir'],
            'tanggal_masuk' => $request['tanggal_masuk'],
            'tanggal_mpp' => $request['tanggal_mpp'],
            'tanggal_pensiun' => $request['tanggal_pensiun'],
            'jabatan_id' => $request['jabatan_id'],
            'unit_kerja_id' => $request['unit_kerja_id'],
            'posisi_id' => $request['posisi_id'],
            'pangkat_id' => $request['pangkat_id'],
            'grade' => $request['grade'],
            'T_to_pensiun' => $request['T_to_pensiun'],
            'brithplace' => $request['brithplace'],
            'Tmt' => $request['Tmt'],
            'level_id' => $request['level_id'],
            'action' => $request['action']
        ]);

        return redirect('karyawan/show')->with('alert','Data berhasil diperbaharui');
    }
    public function destroy($id)
    {
        $post = Karyawan::where('id',$id)->delete();
        return response()->json($post);
    }
}
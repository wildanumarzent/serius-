<?php

namespace App\Http\Controllers\Menej_sdm\Jabatan;

use App\Http\Controllers\Controller;
use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function __construct() { $this->middleware('auth'); }
    
    public function index(Request $request)
    {
        // $this->authorize('master_data', Jabatan::class);
        // $pangkat = Jabatan::all();
        // if ($request->ajax()) {
        //     return datatables()->of($pangkat)
        //     ->addColumn('action', function($data){
        //         $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Edit" class="edit btn btn-info btn-sm edit-post"><i class="ti-pencil-alt"></i></a>';
        //         $button .= '&nbsp;&nbsp;';
        //         $button .= '&nbsp;&nbsp;';
        //         $button .= '<button  name="delete" id="'.$data->id.'"class="delete btn btn-danger btn-sm"><i class="ti-trash"></i></a>';
        //         return $button;
        //     })
        //     ->rawColumns(['action','level'])
        //     ->addIndexColumn()
        //     ->make(true);
        // }
        $url = 'jabatan';
        return view('pages.admin.masterData.jabatan',compact('url'));
        // return response()->json($pangkat);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $url = 'jabatan';
        return view('pages.admin.menej_Pangkat.jabatan.add', compact('url'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'input_data' => 'required|unique:jabatan,nama_jabatan'
        ]);
        
        $id = $request->id;
        $post = Jabatan::updateOrCreate(['id' => $id],
                    [ 'nama_jabatan' => $request->input_data ]);
        return response()->json($post);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function show(Jabatan $jabatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $where = array('id' => $id);
        $post  = Jabatan::where($where)->first();
        return response()->json($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $post=Jabatan::findOrFail($id);
        $data=$request->all();
        $post->update($data);
        return redirect('jabatan')->with('jabatan behasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Jabatan::where('id',$id)->delete();
        return response()->json($post);
    }
}
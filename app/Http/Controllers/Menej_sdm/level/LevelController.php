<?php

namespace App\Http\Controllers\Menej_sdm\level;

use App\Http\Controllers\Controller;
use App\Models\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('master_data', Level::class);
        $pangkat = Level::all();
        if ($request->ajax()) {
            return datatables()->of($pangkat)
            ->addColumn('action', function($data){
                $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Edit" class="edit btn btn-info btn-sm edit-post"><i class="ti-pencil-alt"></i></a>';
                $button .= '&nbsp;&nbsp;';
                $button .= '&nbsp;&nbsp;';
                $button .= '<button  name="delete" id="'.$data->id.'"class="delete btn btn-danger btn-sm"><i class="ti-trash"></i></a>';
                return $button;
            })
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        $url = 'level';
        return view('pages.admin.menej_Pangkat.level.index', compact('url'));
        // return response()->json($pangkat);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'input_data' => 'required|unique:levels,level'
        ]);
        $id = $request->id;

        $post = Level::updateOrCreate(['id' => $id],
                    [ 'level' => $request->input_data ]);
        return response()->json($post);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\level  $level
     * @return \Illuminate\Http\Response
     */
    public function show(level $level)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\level  $level
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $where = array('id' => $id);
        $post  = Level::where($where)->first();
        return response()->json($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\level  $level
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, level $level)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\level  $level
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Level::where('id',$id)->delete();
        return response()->json($post);
    }
}
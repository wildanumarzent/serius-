<?php

namespace App\Http\Controllers\Position;

use App\Http\Controllers\Controller;
use App\Models\Position\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $position = Position::all();
        if ($request->ajax()) {
            return datatables()->of($position)
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
        $url = 'position';
        return view('pages.admin.menej_Pangkat.Position.index', compact('url'));
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
            'input_data' => 'required|unique:posisi,nama_posisi'
        ]);
        $id = $request->id;
        $post = Position::updateOrCreate(
            ['id' => $id],
            [ 'nama_posisi' => $request->input_data ]
        );
        return response()->json($post);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Position\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function show(Position $position)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Position\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $where = array('id' => $id);
        $post  = Position::where($where)->first();
        return response()->json($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Position\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Position $position)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Position\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Position::where('id',$id)->delete();
        return response()->json($post);
    }
}
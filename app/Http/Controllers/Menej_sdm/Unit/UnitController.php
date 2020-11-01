<?php

namespace App\Http\Controllers\Menej_sdm\Unit;

use App\Http\Controllers\Controller;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    
    public function index(Request $request)
    {
        // $this->authorize('master_data', Unit::class);
        // $unit = Unit::all();
        // if ($request->ajax()) {
        //     return datatables()->of($unit)
        //     ->addColumn('action', function($data){
        //         $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Edit" class="edit btn btn-info btn-sm edit-post"><i class="ti-pencil-alt"></i></a>';
        //         $button .= '&nbsp;&nbsp;';
        //         $button .= '&nbsp;&nbsp;';
        //         $button .= '<button  name="delete" id="'.$data->id.'"class="delete btn btn-danger btn-sm"><i class="ti-trash"></i></a>';
        //         return $button;
        //     })
        //     ->rawColumns(['action'])
        //     ->addIndexColumn()
        //     ->make(true);
        // }
        // $url = 'unit';
        return view('pages.admin.unit.index');
        // return response()->json($unit);
    }


    public function create()
    {
        //
    }

 
    public function store(Request $request)
    {
        $this->validate($request, [
            'input_data' => 'required|unique:units,unit_kerja'
        ]);
        $id = $request->id;

        $post = Unit::updateOrCreate(['id' => $id],
                    [ 'unit_kerja' => $request->input_data ]);
        return response()->json($post);
    }

  
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        $where = array('id' => $id);
        $post  = Unit::where($where)->first();
        return response()->json($post);
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $unit = Unit::where('id',$id)->delete();
        return response()->json($unit);
    }
}
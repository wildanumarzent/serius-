<?php

namespace App\Http\Controllers\Menej_sdm\Pangkat;

use App\Http\Controllers\Controller;
use App\Models\Pangkat;
use Illuminate\Http\Request;

class PangkatController extends Controller
{
    public function __construct() { $this->middleware('auth'); }
    
    public function index(Request $request)
    {
        
        return view('pages.admin.pangkat.index');
        // return response()->json($pangkat);
    }

    
    public function create()
    {
        
    }

    
    public function store(Request $request)
    {

        $this->validate($request, [
            'input_data' => 'required|unique:pangkats,nama_pangkat'
        ]);
        $id = $request->id;

        $post = Pangkat::updateOrCreate(['id' => $id],
                    [ 'nama_pangkat' => $request->input_data ]);
        return response()->json($post);
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $where = array('id' => $id);
        $post  = Pangkat::where($where)->first();
        return response()->json($post);
    }

  
    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        $post = Pangkat::where('id',$id)->delete();
        return response()->json($post);
    }
}
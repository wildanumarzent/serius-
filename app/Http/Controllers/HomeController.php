<?php

namespace App\Http\Controllers;

use App\Models\{Karyawan,Unit,Level};
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(User $user)
    {
        // $count_karyawan = DB::table('Karyawan')->count();
        // $this->authorize('update', $user);
        $count_karyawan = Karyawan::all()->count();
        $url = 'home';
        
        return view('Home/home', compact('url','count_karyawan'));
    }

    public function grafik(){
        $data_karyawan=Karyawan::get();
    }
}
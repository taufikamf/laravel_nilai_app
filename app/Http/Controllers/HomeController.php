<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use App\Models\Nilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $nilai = Nilai::all()->join('matkuls', 'nilai.id_matkul', '=', 'matkuls.id')
        $nilai = DB::table('nilais')
            ->join('matkuls', 'nilais.id_matkul', '=', 'matkuls.id')
            ->join('kriterias', 'nilais.id_kriteria', '=', 'kriterias.id')
            ->select('nilais.*', 'matkuls.nama as nama_matkul','kriterias.nama as nama_kriteria')
            ->get();

        $nilai = $nilai->toArray();
        // $kosong= []; 
        // foreach($nilai as $nilais){
        //     $kosong = array_merge($kosong, $nilais);
        // }

        // dd($nilai);
        // $nilaini = json_encode($nilai);
        // dd(json_decode($nilaini));
        // $nilai = array('nilai' => json_decode($nilai));
        // dd($nilai->where('id_user',3));
        $matkul = Matkul::all();
        // $matkul2 = DB::table('matkuls')
        //             ->where("id","=", "1")->get();
        // dd($matkul);
        return view('home', compact('nilai','matkul'));
    }
}

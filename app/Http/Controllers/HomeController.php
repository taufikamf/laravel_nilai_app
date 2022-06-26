<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use App\Models\Nilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

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
        $nilai = Nilai::all();
        $nilai = $nilai->pluck('nilai')->toArray();
        $nilaiLength = count($nilai);
        $ipk = (array_sum($nilai) / ($nilaiLength)) * 0.1 / 2.4;
        $ipk = substr($ipk,0,3);

        $id_matkul = Nilai::select('id_matkul')->where('id_user', auth()->id())->distinct()->get();

        $matkul = [];
        foreach ($id_matkul as $key => $value) {
            $matkul[$key]['matkul'] = Matkul::find($value['id_matkul']);
            $nilaiWithKriteria = Nilai::with('kriteria')->where('id_user', auth()->id())->where('id_matkul', $value['id_matkul'])->get();
            $matkul[$key]['nilai'] = $nilaiWithKriteria;
        }

        return view('home', compact('matkul','nilai','ipk','nilaiLength'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use Illuminate\Http\Request;
use App\Models\Matkul;
use App\Models\User;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $nilai = Nilai::all();
        return view('nilai.index',compact('nilai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $matkul = Matkul::pluck('nama', 'id');
        $user = User::pluck('name', 'id');
        return view('nilai.create', compact('matkul','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_matkul' => 'required',
            'nilai' => 'required',
            'id_user' => 'required',
        ]);
        $show = Nilai::create($validatedData);
   
        return redirect('/nilai')->with('success', 'Nilai is successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nilai = Nilai::findOrFail($id);

        return view('nilai.edit', compact('nilai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email,'.$id,
            'password' => 'required',
            'nomor_identitas' => 'required',
            'role' => 'required|integer'
        ]);
        Nilai::whereId($id)->update($validatedData);

        return redirect('/nilai')->with('success', 'Data Nilai is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nilai = Nilai::findOrFail($id);
        $nilai->delete();

        return redirect('/nilai')->with('success', 'Nilai Data is successfully deleted');
    }
}

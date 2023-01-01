<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Matkul;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MatkulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {

        $matkuls = Matkul::select(
            'id',
            'day',
            'name',
            'ruang',
            'waktu_mulai',
            'waktu_selesai'
        )->with(['dosen' => function($query){
                $query -> select('id', 'name');
        }])->filter(request(['semester']))->get();

        return Inertia::render('Dev/Index',[
            'title' => "Kurikulum",
            'matkuls' => $matkuls,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return Inertia::render('Dev/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        //set validation
        $validate = $request->validate([
            'name'   => 'required',
            'slug' => 'required',
            'sks' => 'required',
            'semester' => 'required',
            'sub' => 'required',
            'is_praktikum' => 'required',
            'ruang' => 'required',
            'day' => 'required',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
        ]);

        Matkul::create($validate);

        return redirect('/matkul')->with('message', 'Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Matkul  $matkul
     * @return \Illuminate\Http\Response
     */
    public function show(Matkul $matkul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Matkul  $matkul
     * @return \Illuminate\Http\Response
     */
    public function edit(Matkul $matkul)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Matkul $request, Matkul $matkul)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Matkul  $matkul
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matkul $matkul)
    {
        //
    }
}

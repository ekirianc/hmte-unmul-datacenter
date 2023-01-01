<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Matkul;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        /*https://www.iankumu.com/blog/laravel-many-to-many-relationship/*/
        $matkuls = Matkul::select('id', 'day', 'semester', 'name', 'ruang', 'waktu_mulai', 'waktu_selesai')
            ->with(['dosen' => function($query){
                $query -> select('id', 'name');
            }])
            ->filter(request(['semester']))->get();

        return Inertia::render('Dev/Index',[
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

        return redirect('/dev')->with('message', 'Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     *
     */
    public function show(Matkul $dev)
    {
        return Inertia::render('Dev/Detail', [
            'matkul' => $dev
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit(Matkul $dev)
    {
        return Inertia::render('Dev/Edit', [
            'matkul' => $dev
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, Matkul $dev)
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

        $dev->update($validate);

        return redirect('/dev')->with('message', 'Data Berhasil Disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($id)
    {
        $matkul = Matkul::findOrfail($id);
        $matkul->delete();

        return redirect('/dev');

    }
}

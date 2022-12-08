<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class MatkulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        if (isset($_REQUEST['semester'])){
            $matkuls = Matkul::select()->filter(request(['semester']))->get();
        }else{
            $matkuls = Matkul::select()->get()->groupBy('semester');
        }

        return view('dashboard.matkul.index',[
            'title' => "Kurikulum",
            'matkuls' => $matkuls,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        if(auth()->user()->is_admin != 1) {
            abort(403);
        }
        return view('dashboard.matkul.create',[
            'title' => "tambah data baru",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|max:40',
            'slug' => 'required|unique:matkuls',
            'ruang' => 'required'
        ]);

        $validate['sks'] = $request->sks;
        $validate['semester'] = $request->semester;
        $validate['day'] = $request->day;
        $validate['waktu_mulai'] = $request->waktu_mulai;
        $validate['waktu_selesai'] = $request->waktu_selesai;

        Matkul::create($validate);
        return redirect('/kurikulum')->with('success', 'Berhasil Menambahkan Mata Kuliah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Matkul $kurikulum)
    {
        return view('dashboard.matkul.detail',[
            'title' => "Matkul | $kurikulum->name",
            'sks' => $kurikulum->sks,
            'semester' => $kurikulum->semester,
            'dosens' => $kurikulum->dosen,
            'slug' => $kurikulum->slug,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Matkul  $matkul
     */
    public function edit(Matkul $kurikulum)
    {
        if(auth()->user()->is_admin != 1) {
            abort(403);
        }
        return view('dashboard.matkul.edit',[
            'title' => "$kurikulum->name",
            'matkul' => $kurikulum
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, Matkul $kurikulum)
    {
        $rules = [
            'name' => 'required|max:40',
            'ruang' => 'required'
        ];

        if ($request->slug != $kurikulum->slug){
            $rules['slug'] = 'required|unique:matkuls';
        }
        $validated = $request->validate($rules);

        $validated['sks'] = $request->sks;
        $validated['semester'] = $request->semester;
        $validated['day'] = $request->day;
        $validated['waktu_mulai'] = $request->waktu_mulai;
        $validated['waktu_selesai'] = $request->waktu_selesai;

        Matkul::where('id', $kurikulum->id)
            ->update($validated);

        return redirect('/kurikulum')->with('success', 'Berhasil Mengubah Mata Kuliah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Matkul $kurikulum)
    {
        Matkul::destroy($kurikulum->id);
        return redirect('/kurikulum')->with('success', 'Berhasil Menghapus Mata Kuliah');
    }

    /*https://github.com/cviebrock/eloquent-sluggable*/
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Matkul::class, 'slug', $request->name);
        return response()->json(['slug'=>$slug]);
    }
}

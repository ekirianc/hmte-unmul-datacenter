<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use App\Models\Semester;

class MatkulController extends Controller
{
    // Route: /kurikulum
    public function show_all(){
        $matkuls = Matkul::select()->get()->groupBy('semester');

//        $kurikulum = Matkul::all();
//        if (request('semester')){
//            $matkuls = $kurikulum;
//            $matkuls->where('semester', '=', request('semester'));
//        }

        return view('matkul_list',[
            'title' => "Kurikulum",
            'matkuls' => $matkuls,
        ]);
    }

    // Route: /matkul/{id:slug}
    public function show_detail(Matkul $id)  /*Matkul = akses ke model(akses ke db), show() nama fungsi */
    {
        return view('matkul_detail',[
            "title" => $id->name, // select name where id
            "sks" => $id->sks,
            "semester" => $id->semester->semester,
            "dosens" => $id->dosen
            /*nilai $id diambil dari route [web.php], mereturn tabel yang bisa digunakan di view*/
        ]);
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use App\Models\Semester;

class MatkulController extends Controller
{
    // Route: /kurikulum
    public function show_all(){
        $matkuls = Semester::with('matkul');

        if (request('semester')){
            $matkuls->where('semester', '=', request('semester'));
        }

        return view('matkul_list',[
            'title' => "Kurikulum",
            'semesters' => $matkuls->get(),
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
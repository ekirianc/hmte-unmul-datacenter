<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use Illuminate\Support\Facades\Route;

class JadwalController extends Controller
{
    // Route: /jadwal
    public function show()
    {
        $title = '';
        if (request()->is('/')){
            $title = "HMTE Data Center | Dashboard";
            $view = 'dashboard';
        }
        if (request()->is('jadwal')){
            $title = "HMTE Data Center | Jadwal";
            $view = 'jadwal';
        }

        return view($view,[
            "title" => $title,
            /*'semesters' => Semester::latest()
                ->filter(request(['semester']))->get(),*/
            "jadwals" => Matkul::select()->filter(request(['semester']))
                ->orderBy('day')->get()->groupBy('day')

        ]);
    }
}
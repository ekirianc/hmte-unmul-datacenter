<?php

namespace App\Http\Controllers;

use App\Models\Day;
use App\Models\Matkul;
use App\Models\Semester;
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

        $user_semester = auth()->user()->semester->semester;
        return view($view,[
            "title" => $title,
            "day" => Day::all(),
            'semesters' => Semester::latest()
                ->filter(request(['semester']))->get(),
            /*"hide" => 0,
            "show" => 1,
            "initial" => 1,*/
        ]);
    }
}
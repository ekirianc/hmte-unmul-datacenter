<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        $req = request(['name']);
        $dosens = Dosen::select('name', 'NIP', 'bidang')->filter($req)->get();


        if ($dosens == '[]'){
            $req = implode(" ", $req);
            $message = "tidak ditemukan dosen dengan nama {$req}";
        }else{
            $message = 'Data ditemukan';
        }

        return response()->json([
            'message'=>$message,
            'dosen'=>$dosens,
        ], 200);
    }

    public function store(Request $request){

        if(env('TOKEN') == $request->TOKEN){
            $request->validate([
                'TOKEN' => 'required',
                'name'   => 'required',
                'nip' => 'required',
                'bidang' => 'required',
            ]);

            $dosen = new Dosen;
            $dosen->name = $request->name;
            $dosen->nip = $request->nip;
            $dosen->bidang = $request->bidang;
            $dosen->save();

            return response()->json(['message', 'data dosen berhasil ditambah'], 200);
        }
        return response()->json(['message', 'token salah'], 401 );
    }

    public function show(Dosen $nip)
    {
//        $dosen = Dosen::find($dev);
        return response()->json([
            'nama'=>$nip->name,
            'NIP'=>$nip->NIP,
            'bidang'=>$nip->bidang,

        ], 200);
    }
}

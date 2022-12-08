<?php

namespace Database\Seeders;

use App\Models\DosenMatkul;
use Illuminate\Database\Seeder;

class DosenMatkulSeeder extends Seeder
{
    public function run()
    {
        DosenMatkul::create(['dosen_id' => 10, 'matkul_id' => 1]);

        DosenMatkul::create(['dosen_id' => 7, 'matkul_id' => 11]);
        DosenMatkul::create(['dosen_id' => 7, 'matkul_id' => 15]);
        DosenMatkul::create(['dosen_id' => 7, 'matkul_id' => 23]);
        DosenMatkul::create(['dosen_id' => 7, 'matkul_id' => 19]);
        DosenMatkul::create(['dosen_id' => 7, 'matkul_id' => 33]);

        DosenMatkul::create(['dosen_id' => 4, 'matkul_id' => 4]);
        DosenMatkul::create(['dosen_id' => 4, 'matkul_id' => 11]);
        DosenMatkul::create(['dosen_id' => 4, 'matkul_id' => 17]);
        DosenMatkul::create(['dosen_id' => 4, 'matkul_id' => 22]);
        DosenMatkul::create(['dosen_id' => 4, 'matkul_id' => 18]);
        DosenMatkul::create(['dosen_id' => 4, 'matkul_id' => 28]);

        DosenMatkul::create(['dosen_id' => 6, 'matkul_id' => 3]);
        DosenMatkul::create(['dosen_id' => 6, 'matkul_id' => 24]);
        DosenMatkul::create(['dosen_id' => 6, 'matkul_id' => 25]);
        DosenMatkul::create(['dosen_id' => 6, 'matkul_id' => 20]);
        DosenMatkul::create(['dosen_id' => 6, 'matkul_id' => 27]);
        DosenMatkul::create(['dosen_id' => 6, 'matkul_id' => 30]);
        DosenMatkul::create(['dosen_id' => 6, 'matkul_id' => 31]);
        DosenMatkul::create(['dosen_id' => 6, 'matkul_id' => 32]);
        DosenMatkul::create(['dosen_id' => 6, 'matkul_id' => 34]);
        DosenMatkul::create(['dosen_id' => 6, 'matkul_id' => 36]);
        DosenMatkul::create(['dosen_id' => 6, 'matkul_id' => 42]);
        DosenMatkul::create(['dosen_id' => 6, 'matkul_id' => 39]);
        DosenMatkul::create(['dosen_id' => 6, 'matkul_id' => 45]);
        DosenMatkul::create(['dosen_id' => 6, 'matkul_id' => 46]);
        DosenMatkul::create(['dosen_id' => 6, 'matkul_id' => 44]);
        DosenMatkul::create(['dosen_id' => 6, 'matkul_id' => 48]);
    }
}

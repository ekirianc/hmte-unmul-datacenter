<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Day;
use App\Models\Dosen;
use App\Models\DosenMatkul;
use App\Models\Jadwal;
use App\Models\Matkul;
use App\Models\Semester;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Semester::create(['semester' => 1]);
        Semester::create(['semester' => 2]);
        Semester::create(['semester' => 3]);
        Semester::create(['semester' => 4]);
        Semester::create(['semester' => 5]);
        Semester::create(['semester' => 6]);
        Semester::create(['semester' => 7]);

        Day::create(['day' => 'senin']);
        Day::create(['day' => 'selasa']);
        Day::create(['day' => 'rabu']);
        Day::create(['day' => 'kamis']);
        Day::create(['day' => 'jumat']);

        $this->call([
            MatkulSeeder::class,
        ]);

        Dosen::factory(8)->create();
        DosenMatkul::factory(48)->create();

        User::create([
            'nim' => '1909076028 ',
            'name' => 'Eki Rian Cavalera',
            'password' => bcrypt('090909'),
            'angkatan' => "2019",
            'is_admin' => true,
            'semester_id' => 7,
        ]);

        User::create([
            'nim' => '1909076026',
            'name' => 'Muhammad Arya Delwizar',
            'password' => bcrypt('090807'),
            'angkatan' => "2019",
            'semester_id' => 7,
            'is_admin' => false,
        ]);

        User::create([
            'nim' => '1234567890',
            'name' => 'guess',
            'password' => bcrypt('123456'),
            'angkatan' => "2000",
            'semester_id' => 1,
            'is_admin' => false,
        ]);
    }
}

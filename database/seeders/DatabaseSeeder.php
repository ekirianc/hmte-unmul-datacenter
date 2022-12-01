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
            'semester' => 7,
            'is_admin' => true,
        ]);

        User::create([
            'nim' => '1909076026',
            'name' => 'Muhammad Arya Delwizar',
            'password' => bcrypt('090807'),
            'angkatan' => "2019",
            'semester' => 7,
            'is_admin' => false,
        ]);

        User::create([
            'nim' => '1234567890',
            'name' => 'guess',
            'password' => bcrypt('123456'),
            'angkatan' => "2000",
            'semester' => 1,
            'is_admin' => false,
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Dosen;
use Illuminate\Database\Seeder;

class DoesenSeeder extends Seeder
{
    public function run()
    {
        Dosen::create([ /*-----   1   ------*/
            'name'=> 'Ir. Muslimin, S.T., M.T., IPM., ASEAN Eng',
            'NIP' => '19760331 200812 1 001',
            'Bidang' => 'Sistem Ketenagalistrikan',
        ]);

        Dosen::create([ /*-----   2   ------*/
            'name'=> 'Dr. Ir. Didit Suprihanto, S.T., M.kom.',
            'NIP' => '19720212 200812 1 003',
            'Bidang' => 'Teknik Komputer',
        ]);

        Dosen::create([ /*-----   3   ------*/
            'name'=> 'Ir. Fatkhul Hani Rumawan, S.T., M.T.',
            'NIP' => '19730423 200012 1 001',
            'Bidang' => 'Sistem Ketenagalistrikan',
        ]);

        Dosen::create([ /*-----   4   ------*/
            'name'=> 'Ir. Fatkhul Hani Rumawan, S.T., M.T.',
            'NIP' => '19730423 200012 1 001',
            'Bidang' => 'Sistem Ketenagalistrikan',
        ]);

        Dosen::create([ /*-----   5   ------*/
            'name'=> 'Ir. Arif Harjanto, ST., M.Kom., IPM., ASEAN Eng.',
            'NIP' => '19840302 200812 1 002',
            'Bidang' => 'Teknologi Dan Sistem Informasi',
        ]);

        Dosen::create([ /*-----   6   ------*/
            'name'=> 'Dr. Eng. Ir. Aji Ery Burhandenny, S.T., M.AIT',
            'NIP' => '19810317 200501 1 001',
            'Bidang' => 'Teknik Komputer',
        ]);

        Dosen::create([ /*-----   7   ------*/
            'name'=> 'Ir. Nur Rani S.Pd,. M.T',
            'NIP' => '19921030 201903 2 025',
            'Bidang' => 'Sistem Ketenagalistrikan',
        ]);

        Dosen::create([ /*-----   8   ------*/
            'name'=> 'Ir. Restu Mukti Utama, S.T., M.T.',
            'NIP' => '19910712 202012 1 004',
            'Bidang' => 'Sistem Ketenagalistrikan',
        ]);

        Dosen::create([ /*-----   9   ------*/
            'name'=> 'Happy Nugroho, S.T., M.T',
            'NIP' => '19851229 201803 1 001',
            'Bidang' => 'Elektronika',
        ]);

        Dosen::create([ /*-----   10   ------*/
            'name'=> 'H. Nurdin, S.Hi., M.Ed., Ph.D.',
            'NIP' => '19790422 200912 1 002',
            'Bidang' => 'Pendidikan Agama',
        ]);

    }
}

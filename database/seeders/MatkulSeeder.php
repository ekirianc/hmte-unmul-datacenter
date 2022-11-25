<?php

namespace Database\Seeders;

use App\Models\Matkul;
use Illuminate\Database\Seeder;

class MatkulSeeder extends Seeder
{
    public function run()
    {
        Matkul::create( [
            'name'=>'Pendidikan Agama',
            'slug'=>'pendidikan-agama',
            'sks'=>3,
            'semester_id'=>1,
            'day_id'=>1,
            'ruang'=>'C404',
            'waktu_mulai'=>"073000",
            'waktu_selesai'=>"091000"
        ] );

        Matkul::create( [
            'name'=>'Kalkulus I',
            'slug'=>'kalkulus-i',
            'sks'=>3,
            'semester_id'=>1,
            'day_id'=>5,
            'ruang'=>'2A2',
            'waktu_mulai'=>"144000",
            'waktu_selesai'=>"161000"
        ] );

        Matkul::create( [
            'name'=>'Algoritma & Pemrograman',
            'slug'=>'algoritma-dan-pemrograman',
            'sks'=>3,
            'semester_id'=>1,
            'day_id'=>3,
            'ruang'=>'2A1',
            'waktu_mulai'=>"092000",
            'waktu_selesai'=>"110000"
        ] );

        Matkul::create( [
            'name'=>'Fisika I',
            'slug'=>'fisika-i',
            'sks'=>3,
            'semester_id'=>1,
            'day_id'=>4,
            'ruang'=>'1A5',
            'waktu_mulai'=>"135000",
            'waktu_selesai'=>"153000"
        ] );

        Matkul::create( [
            'name'=>'Bahasa Inggris',
            'slug'=>'bahasa-inggris',
            'sks'=>2,
            'semester_id'=>1,
            'day_id'=>2,
            'ruang'=>'C208',
            'waktu_mulai'=>"073000",
            'waktu_selesai'=>"091000"
        ] );

        Matkul::create( [
            'name'=>'Pendidikan Pancasila',
            'slug'=>'pendidikan-pancasila',
            'sks'=>2,
            'semester_id'=>1,
            'day_id'=>2,
            'ruang'=>'C304',
            'waktu_mulai'=>"092000",
            'waktu_selesai'=>"110000"
        ] );

        Matkul::create( [
            'name'=>'Pendidikan Kewarganegaraan',
            'slug'=>'pendidikan-kewarganegaraan',
            'sks'=>2,
            'semester_id'=>1,
            'day_id'=>3,
            'ruang'=>'1A5',
            'waktu_mulai'=>"073000",
            'waktu_selesai'=>"091000"
        ] );

        Matkul::create( [
            'name'=>'Bahasa Indonesia',
            'slug'=>'bahasa-indonesia',
            'sks'=>2,
            'semester_id'=>1,
            'day_id'=>4,
            'ruang'=>'2B1',
            'waktu_mulai'=>"073000",
            'waktu_selesai'=>"091000"
        ] );

        Matkul::create( [
            'name'=>'Pengantar Teknik Elektro',
            'slug'=>'pengantar-teknik-elektro',
            'sks'=>2,
            'semester_id'=>1,
            'day_id'=>4,
            'ruang'=>'2B1',
            'waktu_mulai'=>"092000",
            'waktu_selesai'=>"110000"
        ] );

        Matkul::create( [
            'name'=>'Kalkulus II',
            'slug'=>'kalkulus-ii',
            'sks'=>3,
            'semester_id'=>2,
            'day_id'=>1,
            'ruang'=>'3A1',
            'waktu_mulai'=>"073000",
            'waktu_selesai'=>"091000"
        ] );

        Matkul::create( [
            'name'=>'Fisika II',
            'slug'=>'fisika-ii',
            'sks'=>3,
            'semester_id'=>2,
            'day_id'=>1,
            'ruang'=>'1A5',
            'waktu_mulai'=>"135000",
            'waktu_selesai'=>"153000"
        ] );

        Matkul::create( [
            'name'=>'Rangkaian Logika dan Digital',
            'slug'=>'rangkaian-logika-dan-digital',
            'sks'=>3,
            'semester_id'=>2,
            'day_id'=>2,
            'ruang'=>'1A5',
            'waktu_mulai'=>"092000",
            'waktu_selesai'=>"110000"
        ] );

        Matkul::create( [
            'name'=>'Kimia Dasar',
            'slug'=>'kimia-dasar',
            'sks'=>3,
            'semester_id'=>2,
            'day_id'=>2,
            'ruang'=>'C408',
            'waktu_mulai'=>"135000",
            'waktu_selesai'=>"153000"
        ] );

        Matkul::create( [
            'name'=>'Menggambar Teknik Elektro',
            'slug'=>'menggambar-teknik-elektro',
            'sks'=>3,
            'semester_id'=>2,
            'day_id'=>3,
            'ruang'=>'C308',
            'waktu_mulai'=>"092000",
            'waktu_selesai'=>"110000"
        ] );

        Matkul::create( [
            'name'=>'Rangkaian Listrik',
            'slug'=>'rangkaian-listrik',
            'sks'=>3,
            'semester_id'=>2,
            'day_id'=>3,
            'ruang'=>'C404',
            'waktu_mulai'=>"135000",
            'waktu_selesai'=>"153000"
        ] );

        Matkul::create( [
            'name'=>'Ilmu Sosial Budaya Dasar',
            'slug'=>'ilmu-sosial-budaya-dasar',
            'sks'=>2,
            'semester_id'=>2,
            'day_id'=>1,
            'ruang'=>'2A2',
            'waktu_mulai'=>"092000",
            'waktu_selesai'=>"110000"
        ] );

        Matkul::create( [
            'name'=>'Pengantar Elektronika',
            'slug'=>'pengantar-elektronika',
            'sks'=>2,
            'semester_id'=>2,
            'day_id'=>4,
            'ruang'=>'2A1',
            'waktu_mulai'=>"073000",
            'waktu_selesai'=>"091000"
        ] );

        Matkul::create( [
            'name'=>'Dasar Konversi Energi',
            'slug'=>'dasar-konversi-energi',
            'sks'=>3,
            'semester_id'=>3,
            'day_id'=>1,
            'ruang'=>'1A5',
            'waktu_mulai'=>"073000",
            'waktu_selesai'=>"091000"
        ] );

        Matkul::create( [
            'name'=>'Pengukuran Besaran Listrik',
            'slug'=>'pengukuran-besaran-listrik',
            'sks'=>3,
            'semester_id'=>3,
            'day_id'=>2,
            'ruang'=>'C208',
            'waktu_mulai'=>"073000",
            'waktu_selesai'=>"091000"
        ] );

        Matkul::create( [
            'name'=>'Metode Numerik',
            'slug'=>'metode-numerik',
            'sks'=>3,
            'semester_id'=>3,
            'day_id'=>3,
            'ruang'=>'C304',
            'waktu_mulai'=>"092000",
            'waktu_selesai'=>"110000"
        ] );

        Matkul::create( [
            'name'=>'Komunikasi Data',
            'slug'=>'komunikasi-data',
            'sks'=>3,
            'semester_id'=>3,
            'day_id'=>2,
            'ruang'=>'1A5',
            'waktu_mulai'=>"073000",
            'waktu_selesai'=>"091000"
        ] );

        Matkul::create( [
            'name'=>'Medan Elektromagnetik',
            'slug'=>'medan-elektromagnetik',
            'sks'=>3,
            'semester_id'=>3,
            'day_id'=>2,
            'ruang'=>'2B1',
            'waktu_mulai'=>"135000",
            'waktu_selesai'=>"153000"
        ] );

        Matkul::create( [
            'name'=>'Rangkain Listrik II',
            'slug'=>'rangkain-listrik-ii',
            'sks'=>3,
            'semester_id'=>3,
            'day_id'=>4,
            'ruang'=>'2B1',
            'waktu_mulai'=>"092000",
            'waktu_selesai'=>"110000"
        ] );

        Matkul::create( [
            'name'=>'Matematika Teknik',
            'slug'=>'matematika-teknik',
            'sks'=>2,
            'semester_id'=>3,
            'day_id'=>4,
            'ruang'=>'3A1',
            'waktu_mulai'=>"135000",
            'waktu_selesai'=>"153000"
        ] );

        Matkul::create( [
            'name'=>'Probabilitas dan Statistik',
            'slug'=>'probabilitas-dan-statistik',
            'sks'=>2,
            'semester_id'=>3,
            'day_id'=>5,
            'ruang'=>'1A5',
            'waktu_mulai'=>"092000",
            'waktu_selesai'=>"110000"
        ] );

        Matkul::create( [
            'name'=>'Kesehatan dan Keselamatan Kerja',
            'slug'=>'kesehatan-dan-keselamatan-kerja',
            'sks'=>2,
            'semester_id'=>3,
            'day_id'=>3,
            'ruang'=>'1A5',
            'waktu_mulai'=>"135000",
            'waktu_selesai'=>"153000"
        ] );

        Matkul::create( [
            'name'=>'Sistem Instrumentasi',
            'slug'=>'sistem-instrumentasi',
            'sks'=>3,
            'semester_id'=>4,
            'day_id'=>1,
            'ruang'=>'C408',
            'waktu_mulai'=>"092000",
            'waktu_selesai'=>"110000"
        ] );

        Matkul::create( [
            'name'=>'Dasar Sistem Tenaga Listrik',
            'slug'=>'dasar-sistem-tenaga-listrik',
            'sks'=>3,
            'semester_id'=>4,
            'day_id'=>1,
            'ruang'=>'C308',
            'waktu_mulai'=>"111000",
            'waktu_selesai'=>"135000"
        ] );

        Matkul::create( [
            'name'=>'Mikrokontroler',
            'slug'=>'mikrokontroler',
            'sks'=>3,
            'semester_id'=>4,
            'day_id'=>1,
            'ruang'=>'C404',
            'waktu_mulai'=>"135000",
            'waktu_selesai'=>"153000"
        ] );

        Matkul::create( [
            'name'=>'Dasar Sistem Pengaturan',
            'slug'=>'dasar-sistem-pengaturan',
            'sks'=>3,
            'semester_id'=>4,
            'day_id'=>2,
            'ruang'=>'2A2',
            'waktu_mulai'=>"073000",
            'waktu_selesai'=>"091000"
        ] );

        Matkul::create( [
            'name'=>'Sistem Linear',
            'slug'=>'sistem-linear',
            'sks'=>3,
            'semester_id'=>4,
            'day_id'=>2,
            'ruang'=>'2A1',
            'waktu_mulai'=>"092000",
            'waktu_selesai'=>"110000"
        ] );

        Matkul::create( [
            'name'=>'Kecerdasan Buatan',
            'slug'=>'kecerdasan-buatan',
            'sks'=>3,
            'semester_id'=>4,
            'day_id'=>3,
            'ruang'=>'1A5',
            'waktu_mulai'=>"073000",
            'waktu_selesai'=>"091000"
        ] );

        Matkul::create( [
            'name'=>'Energi Baru Terbarukan',
            'slug'=>'energi-baru-terbarukan',
            'sks'=>3,
            'semester_id'=>4,
            'day_id'=>4,
            'ruang'=>'C208',
            'waktu_mulai'=>"073000",
            'waktu_selesai'=>"091000"
        ] );

        Matkul::create( [
            'name'=>'Struktur Data',
            'slug'=>'struktur-data',
            'sks'=>3,
            'semester_id'=>5,
            'day_id'=>3,
            'ruang'=>'C304',
            'waktu_mulai'=>"092000",
            'waktu_selesai'=>"110000"
        ] );

        Matkul::create( [
            'name'=>'Arsitektur Komputer',
            'slug'=>'arsitektur-komputer',
            'sks'=>3,
            'semester_id'=>5,
            'day_id'=>2,
            'ruang'=>'1A5',
            'waktu_mulai'=>"092000",
            'waktu_selesai'=>"110000"
        ] );

        Matkul::create( [
            'name'=>'Jaringan Komputer',
            'slug'=>'jaringan-komputer',
            'sks'=>3,
            'semester_id'=>5,
            'day_id'=>1,
            'ruang'=>'2B1',
            'waktu_mulai'=>"135000",
            'waktu_selesai'=>"153000"
        ] );

        Matkul::create( [
            'name'=>'Basis Data',
            'slug'=>'basis-data',
            'sks'=>3,
            'semester_id'=>5,
            'day_id'=>3,
            'ruang'=>'2B1',
            'waktu_mulai'=>"144000",
            'waktu_selesai'=>"161000"
        ] );

        Matkul::create( [
            'name'=>'Embedded System',
            'slug'=>'embedded-system',
            'sks'=>3,
            'semester_id'=>5,
            'day_id'=>4,
            'ruang'=>'3A1',
            'waktu_mulai'=>"135000",
            'waktu_selesai'=>"153000"
        ] );

        Matkul::create( [
            'name'=>'Teknologi Informasi',
            'slug'=>'teknologi-informasi',
            'sks'=>3,
            'semester_id'=>5,
            'day_id'=>5,
            'ruang'=>'1A5',
            'waktu_mulai'=>"135000",
            'waktu_selesai'=>"153000"
        ] );

        Matkul::create( [
            'name'=>'Kewirausahaan',
            'slug'=>'kewirausahaan',
            'sks'=>2,
            'semester_id'=>5,
            'day_id'=>5,
            'ruang'=>'1A5',
            'waktu_mulai'=>"092000",
            'waktu_selesai'=>"110000"
        ] );

        Matkul::create( [
            'name'=>'Metodologi Penelitian',
            'slug'=>'metodologi-penelitian',
            'sks'=>2,
            'semester_id'=>5,
            'day_id'=>1,
            'ruang'=>'C408',
            'waktu_mulai'=>"092000",
            'waktu_selesai'=>"110000"
        ] );

        Matkul::create( [
            'name'=>'Interaksi Manusia dan Komputer',
            'slug'=>'interaksi-manusia-dan-komputer',
            'sks'=>3,
            'semester_id'=>6,
            'day_id'=>1,
            'ruang'=>'C308',
            'waktu_mulai'=>"111000",
            'waktu_selesai'=>"135000"
        ] );

        Matkul::create( [
            'name'=>'Sistem Keamanan',
            'slug'=>'sistem-keamanan',
            'sks'=>3,
            'semester_id'=>6,
            'day_id'=>2,
            'ruang'=>'2B1',
            'waktu_mulai'=>"111000",
            'waktu_selesai'=>"135000"
        ] );

        Matkul::create( [
            'name'=>'Komputer Vision',
            'slug'=>'komputer-vision',
            'sks'=>3,
            'semester_id'=>6,
            'day_id'=>2,
            'ruang'=>'2B1',
            'waktu_mulai'=>"073000",
            'waktu_selesai'=>"091000"
        ] );

        Matkul::create( [
            'name'=>'Sistem Operasi',
            'slug'=>'sistem-operasi',
            'sks'=>3,
            'semester_id'=>6,
            'day_id'=>4,
            'ruang'=>'3A1',
            'waktu_mulai'=>"135000",
            'waktu_selesai'=>"153000"
        ] );

        Matkul::create( [
            'name'=>'Pemrograman Mobile',
            'slug'=>'pemrograman-mobile',
            'sks'=>3,
            'semester_id'=>6,
            'day_id'=>3,
            'ruang'=>'1A5',
            'waktu_mulai'=>"111000",
            'waktu_selesai'=>"135000"
        ] );

        Matkul::create( [
            'name'=>'Analisis Berbasis Komputer',
            'slug'=>'analisis-berbasis-komputer',
            'sks'=>3,
            'semester_id'=>6,
            'day_id'=>3,
            'ruang'=>'1A5',
            'waktu_mulai'=>"092000",
            'waktu_selesai'=>"110000"
        ] );

        Matkul::create( [
            'name'=>'Pengolah Citra Digital',
            'slug'=>'pengolah-citra-digital',
            'sks'=>3,
            'semester_id'=>7,
            'day_id'=>1,
            'ruang'=>'C408',
            'waktu_mulai'=>"144000",
            'waktu_selesai'=>"161000"
        ] );

        Matkul::create( [
            'name'=>'Pemograman Website',
            'slug'=>'pemograman-website',
            'sks'=>3,
            'semester_id'=>7,
            'day_id'=>2,
            'ruang'=>'C308',
            'waktu_mulai'=>"105000",
            'waktu_selesai'=>"122000"
        ] );
    }
}

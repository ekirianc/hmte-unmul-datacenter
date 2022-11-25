<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matkuls', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('semester_id');
            $table->foreignId('day_id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->tinyInteger('sks');
            $table->string('ruang');
            $table->time('waktu_mulai');
            $table->time('waktu_selesai');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matkuls');
    }
};

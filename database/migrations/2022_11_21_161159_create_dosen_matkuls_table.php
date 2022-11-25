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
    public function up(){

        Schema::create('dosen_matkul', function (Blueprint $table) {
            $table->integer('dosen_id')->unsigned();
            $table->foreign('dosen_id')
                ->references('id')
                ->on('dosens')
                ->onDelete('cascade');

            $table->integer('matkul_id')->unsigned();
            $table->foreign('matkul_id')
                ->references('id')
                ->on('matkuls')
                ->onDelete('cascade');

            $table->timestamps();
        });

//        Schema::rename('dosen_matkuls', 'dosen_matkul');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dosen_matkuls');
    }
};

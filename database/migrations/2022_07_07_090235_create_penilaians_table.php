<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenilaiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilaians', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id') 
                ->constrained() 
                ->onUpdate('cascade') 
                ->onDelete('cascade');
            $table->foreignId('mata_pelajaran_id') 
                ->constrained() 
                ->onUpdate('cascade') 
                ->onDelete('cascade');
            $table->integer('PH1');
            $table->integer('PH2');
            $table->integer('PH3');
            $table->integer('PTS');
            $table->integer('PAS');
            $table->integer('Total PH'); 
            $table->integer('Total Akhir'); 
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
        Schema::dropIfExists('penilaians');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMataPelajaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mata_pelajarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kelas_id') 
                ->constrained() 
                ->onUpdate('cascade') 
                ->onDelete('cascade');
            $table->foreignId('tahun_pendidikan_id') 
                ->constrained() 
                ->onUpdate('cascade') 
                ->onDelete('cascade');
            $table->foreignId('guru_id') 
                ->constrained() 
                ->onUpdate('cascade') 
                ->onDelete('cascade');
            $table->string('mata_pelajaran');
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
        Schema::dropIfExists('mata_pelajarans');
    }
}

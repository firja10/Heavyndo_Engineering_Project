<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJenisProjeksTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis__projeks', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->string('nama_projek')->nullable();
            $table->string('durasi_projek')->nullable();
            $table->string('status_projek')->nullable();
            $table->string('gambar_projek')->nullable();
            $table->string('anggaran_projek')->nullable();

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
        Schema::dropIfExists('jenis__projeks');
    }
}

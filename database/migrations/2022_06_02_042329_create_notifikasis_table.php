<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotifikasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifikasis', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->string('nama_notifikasi')->nullable();
            $table->string('pengirim_notifikasi')->nullable();
            $table->string('icon_notifikasi')->nullable();

            $table->string('nama_aktivitas')->nullable();
            $table->longText('deskripsi_notifikasi')->nullable();
            

            $table->date('tanggal_notifikasi')->nullable();

            $table->date('tanggal_akhir_aktivitas')->nullable();
            $table->date('tanggal_awal_aktivitas')->nullable();
           
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
        Schema::dropIfExists('notifikasis');
    }
}

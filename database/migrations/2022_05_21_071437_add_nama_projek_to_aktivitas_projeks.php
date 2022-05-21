<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNamaProjekToAktivitasProjeks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('aktivitas_projeks', function (Blueprint $table) {
            //
            $table->string('nama_projek')->nullable()->after('nama_aktivitas');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('aktivitas_projeks', function (Blueprint $table) {
            //

            $table->dropColumn(['nama_projek']);
        });
    }
}

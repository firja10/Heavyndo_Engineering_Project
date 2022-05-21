<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPjToAktivitasProjeks extends Migration
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
            $table->string('penanggung_jawab')->nullable()->after('nama_projek');
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
            $table->dropColumn(['penanggung_jawab']);
        });
    }
}

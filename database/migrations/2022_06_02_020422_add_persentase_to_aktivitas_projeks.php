<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPersentaseToAktivitasProjeks extends Migration
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

            $table->string('persentase_progress')->nullable()->after('penanggung_jawab');;

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
            $table->dropColumn(['persentase_progress']);
        });
    }
}

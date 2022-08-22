<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUrgensitasToAktivitasProjeks extends Migration
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

            $table->string('urgensitas')->nullable();
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

            $table->dropColumn(['urgensitas']);

        });
    }
}

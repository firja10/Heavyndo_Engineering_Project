<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkToAktivitasProjeks extends Migration
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
            $table->unsignedBigInteger('jenis_projek_id')->nullable();
            $table->foreign('jenis_projek_id')->references('id')->on('jenis__projeks')->onUpdate('cascade')->onDelete('cascade');
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

            $table->dropForeign('jenis_projek_id');
            $table->dropColumn(['jenis_projek_id']);

        });
    }
}

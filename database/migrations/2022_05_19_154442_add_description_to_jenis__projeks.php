<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDescriptionToJenisProjeks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jenis__projeks', function (Blueprint $table) {
            //
            $table->string('deskripsi_projek')->nullable()->after('durasi_projek');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jenis__projeks', function (Blueprint $table) {
            //

            $table->dropColumn(['deskripsi_projek']);

        });
    }
}

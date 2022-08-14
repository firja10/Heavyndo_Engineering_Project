<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVerifToJenisProjeks extends Migration
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

            $table->integer('status_verif')->nullable()->after('status_projek');

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

            $table->dropColumn(['status_verif']);
        });
    }
}

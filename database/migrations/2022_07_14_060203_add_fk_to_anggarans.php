<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkToAnggarans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('anggarans', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('projek_id')->nullable()->after('rab');
            $table->foreign('projek_id')->references('id')->on('jenis__projeks')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('anggarans', function (Blueprint $table) {
            //

            $table->dropForeign('projek_id');
            $table->dropColumn(['projek_id']);

        });
    }
}

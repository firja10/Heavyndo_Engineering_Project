<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkToNotifikasis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('notifikasis', function (Blueprint $table) {
            //

            $table->unsignedBigInteger('aktivitas_projek_id')->nullable()->after('nama_notifikasi');
            $table->foreign('aktivitas_projek_id')->references('id')->on('aktivitas_projeks')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('notifikasis', function (Blueprint $table) {
            //

            $table->dropForeign('aktivitas_projek_id');
            $table->dropColumn(['aktivitas_projek_id']);
        });
    }
}

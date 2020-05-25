<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {	
        Schema::rename('musicians','artists');
        Schema::table('artists', function (Blueprint $table) {
            $table->string('avatar');
            $table->string('birthday');
            $table->string('country');
        });
        Schema::table('albums', function (Blueprint $table) {
            $table->string('image');
            $table->bigInteger('view')->default(0);
        });
        Schema::table('songs', function ($table) {
            $table->dropColumn('musician_id');
            $table->dropColumn('status');
            $table->dropColumn('singer_id');
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

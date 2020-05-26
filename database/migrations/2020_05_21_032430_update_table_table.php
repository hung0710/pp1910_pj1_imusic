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
            $table->string('image')->nullable();
            $table->bigInteger('view')->default(0);
            $table->dropColumn('singer_id');
        });
        Schema::table('songs', function ($table) {
            $table->renameColumn('musician_id', 'artists');
            $table->dropColumn('status');
            $table->renameColumn('singer_id', 'singer');
            $table->string('URL')->after('name');
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

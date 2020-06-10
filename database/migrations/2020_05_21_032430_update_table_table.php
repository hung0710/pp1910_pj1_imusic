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
        Schema::rename('musicians','artistses');
        Schema::table('artistses', function (Blueprint $table) {
            $table->string('url');
            $table->dropColumn('description');
            $table->text('information');
        });
        Schema::table('albums', function (Blueprint $table) {
            $table->string('url');
            $table->bigInteger('view')->default(0);
            $table->dropColumn('singer_id');
        });
        Schema::table('songs', function ($table) {
            $table->dropColumn('musician_id');
            $table->dropColumn('status');
            $table->dropColumn('singer_id');
            $table->string('url')->after('name');
            $table->string('singer')->after('url')->nullable();
            $table->integer('artists_id')->after('category_id');
        });
        Schema::drop('singers');
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

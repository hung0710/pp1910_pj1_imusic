<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listable', function (Blueprint $table) {
            $table->bigInteger('song_id');
            $table->bigInteger('listable_id');
            $table->string('listable_type');
            $table->primary(['song_id', 'listable_id', 'listable_type']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listable');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('menu')) {
            Schema::create('menu', function (Blueprint $table) {
                $table->increments('id');
                $table->timestamps();
                $table->integer('snack_id')->unsigned();
                $table->foreign('snack_id')->references('id')->on('snacks');
                $table->integer('quantity')->nullable();
                $table->integer('event_id')->unsigned();
                $table->foreign('event_id')->references('id')->on('events');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu');
    }
}

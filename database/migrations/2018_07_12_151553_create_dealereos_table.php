<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealereosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dealereos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->integer('organizer_id')->unsigned();
            $table->foreign('organizer_id')->references('id')->on('organizers')->onDelete('restrict');
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
        Schema::dropIfExists('dealereos');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabdarugoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labdarugo', function (Blueprint $table) {
            $table->id();
            $table->integer('mezszam');
            $table->integer('klubid');
            $table->integer('posztid');
            $table->string('utonev')->nullable();
            $table->string('vezeteknev');
            $table->date('szulido');
            $table->boolean('magyar');
            $table->boolean('kulfoldi');
            $table->integer('ertek');
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
        Schema::dropIfExists('labdarugo');
    }
}

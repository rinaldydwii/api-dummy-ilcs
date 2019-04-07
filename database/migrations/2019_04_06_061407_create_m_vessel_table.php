<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMVesselTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_vessel', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vessel_name', 50);
            $table->string('voyage_in', 5)->nullable();
            $table->string('voyage_out', 5)->nullable();
            $table->dateTime('eta');
            $table->dateTime('etb');
            $table->dateTime('etd')->nullable();
            $table->string('terminal', 250);
            $table->string('name', 50);
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
        Schema::dropIfExists('m_vessel');
    }
}

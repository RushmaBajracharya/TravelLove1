<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('twowayoutboundtickets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lastname')->nullable();
            $table->string('firstname')->nullable();
            $table->string('phone')->nullable();
            $table->string('going_from');
            $table->string('going_to');
            $table->date('departure_day');
            $table->date('returning_day');
            $table->string('status')->default('pending');

            $table->integer('no_of_tickets')->nullable();
            $table->integer('no_of_adults')->nullable();
            $table->integer('no_of_child')->nullable();
            $table->integer('no_of_infant')->nullable();
            $table->integer('passport_number')->nullable();
            $table->integer('passport_validity')->nullable();
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
        Schema::dropIfExists('twowayoutboundtickets');
    }
};

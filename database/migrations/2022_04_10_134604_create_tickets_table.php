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
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lastname');
            $table->string('firstname');
            $table->string('phone');
            $table->string('Going_from');
            $table->string('Going_to');
            $table->date('departure_day');
            $table->date('returning_day');
            $table->integer('no_of_adults');
            $table->integer('no_of_child');
            $table->integer('no_of_infant');
            $table->integer('passport_number');
            $table->integer('passport_validity');
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
        Schema::dropIfExists('tickets');
    }
};

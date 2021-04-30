<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHallSinglesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hall_singles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');  
            $table->string('style');
            $table->float('price');
            $table->float('discount')->default(1);
            $table->string('description');
            $table->string('is_available');
            $table->bigInteger('halls_id');
            $table->string('video');
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
        Schema::dropIfExists('hall_singles');
    }
}

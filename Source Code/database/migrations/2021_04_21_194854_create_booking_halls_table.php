<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingHallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_halls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('statusPayment')->default('Processing');
            $table->date('date')->nullable();
            $table->dateTime('from_time');
            $table->dateTime('to_time');
            $table->string('additional_info')->nullable();
            $table->float('total_price');
            $table->boolean('IsCompleted')->default(false);
             $table->bigInteger('hall_id');
             $table->bigInteger('customer_id');
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
        Schema::dropIfExists('booking_halls');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('w_id');
            $table->unsignedInteger('e_id');
            $table->unsignedInteger('i_id');
            $table->string('price');
            $table->string('startTime')->nullable();
            $table->string('endTime')->nullable();
            $table->string('date');
            $table->unsignedInteger('s_id');
            $table->unsignedInteger('a_id');
            $table->unsignedInteger('r_id')->nullable();
            $table->unsignedInteger('status')->nullable();
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
        Schema::dropIfExists('orders');
    }
}

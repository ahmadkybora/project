<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('family')->nullable();
            $table->string('phone');
            $table->string('password')->nullable();
            $table->string('birthdate')->nullable();
            $table->string('nationalCode');
            $table->tinyInteger('gender')->nullable();
            $table->text('address')->nullable();
            $table->string('wallet')->nullable();
            $table->string('profileImage')->nullable();
            $table->tinyInteger('isMarital')->nullable();
            $table->tinyInteger('isOperator')->nullable();
            $table->tinyInteger('isAdmin')->nullable();
            $table->tinyInteger('isWorker')->nullable();
            $table->tinyInteger('isEmployer')->nullable();
            $table->tinyInteger('education')->nullable();
            $table->string('tell')->nullable();
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
        Schema::dropIfExists('users');
    }
}

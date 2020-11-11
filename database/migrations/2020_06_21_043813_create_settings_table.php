<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->integer('workerPriceLevel1');
            $table->integer('workerPriceLevel2');
            $table->integer('workerPriceLevel3');
            $table->integer('defaultPriceWallet1');
            $table->integer('defaultPriceWallet2');
            $table->integer('defaultPriceWallet3');
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
        Schema::dropIfExists('settings');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('workers', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('u_id');
            $table->string('imageBirthCertificate')->nullable();
            $table->string('imageCardService')->nullable();
            $table->tinyInteger('militaryServiceStatus');
            $table->tinyInteger('typeOfExemption');
            $table->tinyInteger('socialSecurityInsurance');
            $table->string('insuranceCode');
            $table->integer('degreeOfSkillCard');
            $table->string('imageSkillCard')->nullable();
            $table->integer('countChild');
            $table->string('imageNationalCard')->nullable();
            $table->string('fatherName');
            $table->string('bcNumber');
            $table->text('placeIssue');
            $table->text('placeBirth');
            $table->tinyInteger('religion');
            $table->tinyInteger('religion2');
            $table->tinyInteger('bloodType');
            $table->integer('historyWar');
            $table->integer('historyInjury');
            $table->integer('captivity');
            $table->tinyInteger('housingSitutation');
            $table->tinyInteger('physicalCondition');
            $table->text('physicalConditionComment');
            $table->text('dutyService');
            $table->string('price');
            $table->string('paymentNumber');
            $table->string('cardNumber');
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
        Schema::dropIfExists('workers');
    }
}

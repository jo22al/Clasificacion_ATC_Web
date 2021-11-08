<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sub_classification_id')->nullable();
            $table->unsignedBigInteger('classification_id')->nullable();
            $table->text('active_principle');
            $table->text('pharmaceutical_form');
            $table->text('indications');
            $table->text('route_dosage');
            $table->text('management_rules');
            $table->text('observations');
            $table->mediumText('additional')->nullable();
            $table->timestamps();

            $table->foreign('sub_classification_id')->references('id')->on('sub_classifications')->onDelete('set null');
            $table->foreign('classification_id')->references('id')->on('classifications')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicines');
    }
}

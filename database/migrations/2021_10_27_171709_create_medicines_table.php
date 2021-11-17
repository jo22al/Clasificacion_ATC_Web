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
            $table->mediumtext('active_principle');
            $table->mediumtext('pharmaceutical_form');
            $table->mediumtext('indications');
            $table->mediumtext('route_dosage');
            $table->mediumtext('management_rules');
            $table->mediumtext('observations');
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

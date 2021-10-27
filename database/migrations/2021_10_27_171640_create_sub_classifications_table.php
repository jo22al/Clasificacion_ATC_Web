<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubClassificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_classifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('classification_id')->nullable();
            $table->string('code');
            $table->string('name');

            $table->timestamps();


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
        Schema::dropIfExists('sub_classifications');
    }
}

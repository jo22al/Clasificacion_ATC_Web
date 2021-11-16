<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->nullable();
            $table->string('name');
            $table->string('profession');
            $table->mediumText('personal_profile');
            $table->mediumText('laboral_experience');
            $table->mediumText('academic_history');
            $table->string('address')->default('Guatemala');
            $table->string('email');
            $table->string('telephone')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->mediumText('awards_granted')->nullable();
            $table->string('password')->nullable();

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
        Schema::dropIfExists('resumes');
    }
}

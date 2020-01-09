<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentSubjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_subjects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('students_id');
            $table->unsignedBigInteger('subjects_id');

            // $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('students_id')->references('id')->on('students');

            $table->foreign('subjects_id')->references('id')->on('subjects');
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
        Schema::dropIfExists('students_subjects');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_details', function (Blueprint $table) {
            $table->bigIncrements('id');    $table->unsignedInteger('user_id');
            $table->unsignedInteger('subject_id');
            $table->unsignedInteger('students_id');
            $table->unsignedInteger('grade');
            $table->unsignedInteger('IsActive')->default(1);
            $table->enum('semester',['First Semester','Second Semester'])->default('First Semester');
            $table->enum('exam',['First Exam','Second Exam','Third Exam'])->default('First Exam');
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
        Schema::dropIfExists('student_details');
    }
}

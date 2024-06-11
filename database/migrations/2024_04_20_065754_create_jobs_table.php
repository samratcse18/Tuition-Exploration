<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('creatorid');
            $table->string('student_name');
            $table->string('number_of_student');
            $table->string('gender');
            $table->string('institute');
            $table->string('district');
            $table->string('area');
            $table->string('location');
            $table->string('medium');
            $table->string('class');
            $table->string('subject');
            $table->string('type');
            $table->string('teacher_gender');
            $table->string('day');
            $table->string('time');
            $table->string('salary');
            $table->string('extra_information');
            $table->string('status');
            $table->rememberToken();
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
        Schema::dropIfExists('jobs');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_details', function (Blueprint $table) {
            $table->id();
            $table->string('teacherid');
            $table->string('ssc_institute');
            $table->string('ssc_curriculam');
            $table->string('ssc_group');
            $table->string('ssc_year');
            $table->string('ssc_gpa');
            $table->string('hsc_institute');
            $table->string('hsc_curriculam');
            $table->string('hsc_group');
            $table->string('hsc_year');
            $table->string('hsc_gpa');
            $table->string('bachelor_institute_type');
            $table->string('bachelor_institute');
            $table->string('bachelor_study_type');
            $table->string('bachelor_department');
            $table->string('bachelor_curriculam');
            $table->string('bachelor_year');
            $table->string('bachelor_gpa');
            $table->string('Tuition_District');
            $table->string('Tutor_Location');
            $table->string('medium');
            $table->string('class');
            $table->string('subject');
            $table->string('day');
            $table->string('shift');
            $table->string('salary');
            $table->string('tutoring_style');
            $table->string('experience');
            $table->string('email');
            $table->string('phone');
            $table->string('additional_phone');
            $table->string('name');
            $table->string('gender');
            $table->string('district');
            $table->string('area');
            $table->string('permanent_location');
            $table->string('father_name');
            $table->string('father_phone');
            $table->string('mother_name');
            $table->string('mother_phone');
            $table->string('guardian_phone');
            $table->string('guardian_relationship');
            $table->string('yourself');
            $table->string('image');
            $table->string('document_title');
            $table->string('file');
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
        Schema::dropIfExists('teacher_details');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('nationality');
            $table->string('phone');
            $table->string('email');
            $table->string('id_number');
            $table->date('birthday');
            $table->string('birth_country');
            $table->string('residence_country');
            $table->string('residence_city');
            $table->string('full_address');
            $table->string('university_id');
            $table->string('student_number');
            $table->set('paid',['0','1'])->default('0');
            $table->set('gender',['ذكر','أنثى']);
            $table->set('matrial',['متزوج','أعزب','أرمل','مطلق']);
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
        Schema::dropIfExists('students');
    }
}

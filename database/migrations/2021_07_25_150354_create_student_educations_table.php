<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_educations', function (Blueprint $table) {
            $table->id();
            $table->set('edu_type',['1','2','3','4'])->comment('1 meaning secondary and 2 lisans 3 master 4 istkmal');
            $table->string('issued_country')->nullable(false);
            $table->string('issued_authority');
            $table->string('college')->nullable(false);
            $table->year('issued_date');
            $table->float('score',4,2);
            $table->string('path')->nullable(false);
            $table->foreignId('student_id')->constrained('students') ;
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
        Schema::dropIfExists('student_educations');
    }
}

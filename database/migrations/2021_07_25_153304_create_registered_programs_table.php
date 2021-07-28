<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisteredProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_selections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students') ;
            $table->string('selection1');
            $table->string('selection2');
            $table->string('selection3');
            $table->string('selection4');
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
        Schema::dropIfExists('master_selections');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->bigIncrements('id'); //1
            $table->string('name')->nullable(); // Nguyen van A 
            $table->string('teacher_name')->nullable(); //Phung Minh Hai
            $table->string('major')->nullable(); // CNTT
            $table->integer('max_student')->default('40'); //default them gia tri cho cot
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
        Schema::dropIfExists('classes');
    }
}

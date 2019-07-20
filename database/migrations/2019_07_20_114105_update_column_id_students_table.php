<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateColumnIdStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //thay doi du lieu database
        Schema::table('students',function (Blueprint $table){
            
            $table->integer('class_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //su dung du lieu cu trong database nguoc voi up -<
        Schema::table('students', function (Blueprint $table) {
            $table->dropColumn('class_id');
            
        });
    }
}

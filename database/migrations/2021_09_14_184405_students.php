<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Students extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('studentsFactory',function(Blueprint $table){
//            $table->bigIncrements('id');
//            $table->string('name');
//            $table->string('class');
//            $table->bigInteger('roll', 11);
//            $table->timestamps();
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('studens','studentsFactory');
    }
}

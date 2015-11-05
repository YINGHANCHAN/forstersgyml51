<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');

            // the foreign ket from the schools tables
            $table->integer('school_id')->unsigned();

            // add foreign key constraint
            $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade');

            $table->string('firstname');
            $table->string('lastname');


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
        Schema::drop('students');
    }
}

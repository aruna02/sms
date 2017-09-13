<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatAdmitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admit', function (Blueprint $table) {
            $table->increments('Aid');
            $table->integer('student_id')->unsigned();
            $table->foreign('student_id')->references('sid')->on('student_info');
            $table->float('admission_fee');
            $table->date('admission_date');
            $table->float('deposit');
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
        Schema::drop('admit');
    }
}

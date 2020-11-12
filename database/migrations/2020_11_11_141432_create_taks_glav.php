<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaksGlav extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('apptask', function (Blueprint $table1) {
            $table1->increments('id');
		$table1->integer('user_id')->index();
		$table1->string('name');
		$table1->string('mail');
		$table1->string('phone');
		$table1->string('idea');
            $table1->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('apptask');
    }
}

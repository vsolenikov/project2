<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpperTask extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tasks', function (Blueprint $table) {
//		$table->increments('id');
//		$table->integer('user_id')->unsigned()->index();
//		$table->string('name');
		$table->string('mail');
		$table->string('phone');
		$table->string('idea');
//		$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
/**        Schema::table('todos', function (Blueprint $table) {*/
            Schema::drop('tasks');
    /*    });*/
    }
}

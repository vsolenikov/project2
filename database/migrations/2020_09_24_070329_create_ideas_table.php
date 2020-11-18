<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdeasTable extends Migration
{
    /**
     * Запуск миграций
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ideas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('name');
	        $table->string('mail');
	        $table->string('phone');
    	    $table->string('idea');
            $table->timestamps();
        });
    }

    /**
     * Откатить миграции
     *
     * @return void
     *
     */
    public function down()
    {
        Schema::drop('ideas');
    }
}

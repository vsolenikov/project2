<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * ������ ��������
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
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
     * �������� ��������
     *
     * @return void
     *
     */
    public function down()
    {
        Schema::drop('tasks');
    }
}

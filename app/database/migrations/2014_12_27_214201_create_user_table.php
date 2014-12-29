<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//creating a users table
        Schema::create('maxhus_users', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('lastName');
            $table->string('username');
            $table->string('password');
            $table->string('email');
            $table->string('phoneNumber');
            $table->string('role');
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
		//
        Schema::drop('maxhus_users');
	}

}

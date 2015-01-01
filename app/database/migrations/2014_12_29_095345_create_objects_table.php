<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        //creating a users table
        Schema::create('maxhus_objects', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('type');
            $table->string('description');
            $table->string('imagesUrl');
            $table->string('Ac');
            $table->string('acres_source');
            $table->string('appliances');
            $table->string('disability_access');
            $table->string('floors');
            $table->string('lot_description');
            $table->string('lot_size_source');
            $table->string('misc_interior');
            $table->string('acres');
            $table->integer('ap_number');
            $table->string('bathroom_desc');
            $table->string('bedroom_features');
            $table->string('dining_area');
            $table->string('enclosed_yard');
            $table->string('entry_location');
            $table->string('exterior_construction');
            $table->string('heat');
            $table->string('lot_dimentions');
            $table->string('mello_rooms');
            $table->string('parking_types');
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
        Schema::drop('maxhus_objects');
	}

}

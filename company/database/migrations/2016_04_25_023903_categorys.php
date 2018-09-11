<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Categorys extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            //
                Schema::create('categorys', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
                        $table->string('name_en');
			$table->string('description');
                        $table->string('description_en');
                        $table->integer('location');
                        $table->string('url');
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
	}

}

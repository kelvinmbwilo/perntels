<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('perntel_project', function(Blueprint $table)
		{
			$table->increments('id');
			$table->String('title');
			$table->String('date');
			$table->String('introduction');
			$table->String('body');
			$table->String('path');
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
		Schema::drop('perntel_project');
	}

}

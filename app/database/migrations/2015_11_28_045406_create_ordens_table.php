<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdensTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Ordens', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('miembro_id');
			$table->text('direccion');
			$table->decimal('total',10,2);
			$table->string('estado');
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
		Schema::drop('Ordens');
	}

}

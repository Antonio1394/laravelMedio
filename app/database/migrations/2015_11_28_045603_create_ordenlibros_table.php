<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdenLibrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('OrdenLibros', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('orden_id');
			$table->integer('libro_id');
			$table->integer('cantidad');
			$table->decimal('precio',10,2);
			$table->decimal('total',10,2);
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
		Schema::drop('OrdenLibros');
	}

}

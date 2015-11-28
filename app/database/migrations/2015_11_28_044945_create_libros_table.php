<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLibrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Libros', function(Blueprint $table) {
			$table->increments('id');
			$table->string('titulo');
			$table->string('isbn');
			$table->decimal('precio',10,2);
			$table->string('cubierta')->nullable();
			$table->integer('publicado');
			$table->decimal('rating_cache',10,2)->nullable();
			$table->text('descripcion');
			$table->integer('autor_id');
			$table->integer('categoria_id');
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
		Schema::drop('Libros');
	}

}

<?php

class CategoriasTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('categorias')->truncate();

		Categoria::create(['descripcion'=>'','tipo'=>'']);

		// Uncomment the below to run the seeder
		// DB::table('categorias')->insert($categorias);
	}

}

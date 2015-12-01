<?php

class CategoriasTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('categorias')->truncate();

		Categoria::create(['descripcion'=>'cuentos para ninos','tipo'=>'Literatura infantil']);
		Categoria::create(['descripcion'=>'Artes Culinarias','tipo'=>'Cocina']);
		Categoria::create(['descripcion'=>'Mundo Medico','tipo'=>'Medicina']);
		Categoria::create(['descripcion'=>'Referencia a informatica','tipo'=>'Computacion']);

		// Uncomment the below to run the seeder
		// DB::table('categorias')->insert($categorias);
	}

}

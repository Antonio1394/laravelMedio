<?php

class AutoresTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('autores')->truncate();

		Autore::create (['nombre'=>'Pepito',
						 'apellido'=>'Perez',
						 'nacionalidad'=>'Venezolano']);

		Autore::create (['nombre'=>'Anita',
						 'apellido'=>'Yin',
						 'nacionalidad'=>'japonesa']);

		Autore::create (['nombre'=>'Maximiliano',
						 'apellido'=>'Alcantara',
						 'nacionalidad'=>'Mexicano']);
		// Uncomment the below to run the seeder
		// DB::table('autores')->insert($autores);
	}

}

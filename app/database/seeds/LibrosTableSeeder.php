<?php

class LibrosTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('libros')->truncate();

		Libro::create([
				'titulo'=>
				'isbn'=>
				'precio'=>
				'publicacion'=>
				'descripcion'=>
				'autor_id'=>
				'categoria_id'=>
			]);

		// Uncomment the below to run the seeder
		// DB::table('libros')->insert($libros);
	}

}

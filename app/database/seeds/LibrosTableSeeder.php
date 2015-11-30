<?php

class LibrosTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('libros')->truncate();

		Libro::create([
				'titulo'=>'Patito feo'
				'isbn'=>'123'
				'precio'=>'13.40'
				'publicacion'=>1
				'descripcion'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis quod, modi ut! Quae nam deserunt quia repellat ipsam, molestias illum animi, quis exercitationem aliquid harum omnis impedit, error optio corporis!',
				'autor_id'=>1
				'categoria_id'=>1
			]);

		// Uncomment the below to run the seeder
		// DB::table('libros')->insert($libros);
	}

}

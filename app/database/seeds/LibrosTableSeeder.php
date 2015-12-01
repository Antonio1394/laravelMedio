<?php

class LibrosTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('libros')->truncate();

		Libro::create([
				'titulo'=>'Patito feo',
				'isbn'=>'123',
				'precio'=>'13.40',
				'publicacion'=>1,
				'descripcion'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis quod, modi ut! Quae nam deserunt quia repellat ipsam, molestias illum animi, quis exercitationem aliquid harum omnis impedit, error optio corporis!',
				'autor_id'=>1,
				'categoria_id'=>1
			]);

			Libro::create([
				'titulo'=>'Twilight',
				'isbn'=>'456',
				'precio'=>'9.40',
				'publicacion'=>0,
				'descripcion'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis quod, modi ut! Quae nam deserunt quia repellat ipsam, molestias illum animi, quis exercitationem aliquid harum omnis impedit, error optio corporis!',
				'autor_id'=>2,
				'categoria_id'=>3
			]);

			Libro::create([
				'titulo'=>'Bella',
				'isbn'=>'789',
				'precio'=>'20.30',
				'publicacion'=>1
				'descripcion'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis quod, modi ut! Quae nam deserunt quia repellat ipsam, molestias illum animi, quis exercitationem aliquid harum omnis impedit, error optio corporis!',
				'autor_id'=>3,
				'categoria_id'=>3
			]);

		// Uncomment the below to run the seeder
		// DB::table('libros')->insert($libros);
	}

}

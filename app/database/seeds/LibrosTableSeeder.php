<?php

class LibrosTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('libros')->truncate();

		 $faker=Faker\Factory::create();

		 for ($i=0; $i <10 ; $i++) { 
		 	# code...
		 	Libro::create([
				'titulo'=>$faker->text(40),
				'isbn'=>$faker->numberBetween(100,999),
				'precio'=>$faker->randomFloat(2,3,150),
				'publicado'=>$faker->numberBetween(0,1),
				'descripcion'=>$faker->text(400),
				'autor_id'=>$faker->numberBetween(1,3),
				'categoria_id'=>$faker->numberBetween(1,3),
			]);
		 }


		

			

		// Uncomment the below to run the seeder
		// DB::table('libros')->insert($libros);
	}

}

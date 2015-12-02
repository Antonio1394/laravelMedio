<?php

class UsuariosTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('usuarios')->truncate();
		$faker=Faker\Factory::create();

		for ($i=0; $i <10 ; $i++) { 
		# code...
				$usuarios =  [
				[
					'email'=>$faker->email,
					'password'=>Hash::make('1234'),
					'nombre'=>$faker->firstname,
					'apellido'=>$faker->lastname,
					'admin'=>0,
					'created_at'=> new DateTime
				],
				


			];
			 DB::table('usuarios')->insert($usuarios);
		}
		// Uncomment the below to run the seeder
	

		 Usuario::create([

		 		'email'=>'admin@admin.com',
				'password'=>Hash::make('1234'),
				'nombre'=>'admin',
				'apellido'=>'admin',
				'admin'=>1,
				'created_at'=> new DateTime 

		 	]);

			
					
	}

}

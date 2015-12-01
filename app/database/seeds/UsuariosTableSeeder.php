<?php

class UsuariosTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('usuarios')->truncate();

		$usuarios =  [
			[
				'email'=>'thor@thor.com',
				'password'=>Hash::make('1234'),
				'nombre'=>'Thor',
				'apellido'=>'Vengador',
				'admin'=>0,
				'created_at'=> new DateTime
			],
			[
				'email'=>'admin@admin.com',
				'password'=>Hash::make('1234'),
				'nombre'=>'admin',
				'apellido'=>'admin',
				'admin'=>1,
				'created_at'=> new DateTime 
				
			],


		];

		// Uncomment the below to run the seeder
		 DB::table('usuarios')->insert($usuarios);
	}

}

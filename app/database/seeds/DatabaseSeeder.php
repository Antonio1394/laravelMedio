<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('UsuariosTableSeeder');
		$this->call('CategoriasTableSeeder');
		$this->call('AutoresTableSeeder');
		$this->call('LibrosTableSeeder');
		$this->call('CarrosTableSeeder');
		$this->call('OrdensTableSeeder');
		$this->call('OrdenlibrosTableSeeder');
	}

}

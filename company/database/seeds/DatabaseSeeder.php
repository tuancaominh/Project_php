<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('UserTableSeeder');
	}

}
class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->delete();

		User::create(['name' => 'admin',
				'email'      => 'admin@gmail.com',
				'password'   => '$2y$10$QCNByrstw8TZjb7fyLVybeIgpo.DHuwjAvzjMa3OlIdjv98c1aJ3i',
				'remember_token' => '9YFuSZdMzCnVbFo2MJfnVJLFCYvz2MvevuvaRBI2CKxWgbeJalFo9emlu4Dh',
				'created_at' => '2016-04-20 15:33:17',
				'updated_at' => '2016-04-20 15:33:17'

		]);
	}

}

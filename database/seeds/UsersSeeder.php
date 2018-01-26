<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('users')->insert([
			[
				'email' => 'admin@devrantia.com',
				'password' => bcrypt('password'),
				'remember_token' => str_random(10),
			], [
				'email' => 'user@devrantia.com',
				'password' => bcrypt('password'),
				'remember_token' => str_random(10),
			],
		]);
		DB::table('profiles')->insert([
			[
				'user_id' => 1,
				'name' => 'Admin User',
				'title' => 'The Creator',
				'health' => 999999,
				'mana' => 999999,
				'experience' => 999999,
				'reputation' => 999,
				'devcoins' => 99999999,
			],
		]);
		DB::table('profiles')->insert([
			[
				'user_id' => 2,
				'name' => 'Test User',
			],
		]);
	}
}

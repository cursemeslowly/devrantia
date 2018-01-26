<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('roles')->insert([
			[
				'name' => 'admin',
				'display_name' => 'Admin',
				'description' => 'Admin can manage settings of the app',
			], [
				'name' => 'user',
				'display_name' => 'User',
				'description' => 'User can use the app',
			],
		]);

		DB::table('role_user')->insert([
			[
				'user_id' => 1,
				'role_id' => 1,
			], [
				'user_id' => 2,
				'role_id' => 2,
			],
		]);
	}
}

<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('users')->delete();

		$data = array(
			array(
				'name' => 'admin',
				'email' => 'admin@admin.com',
				'password' => bcrypt('102030'),
				'remember_token' => md5(uniqid(mt_rand(), true)),
				'updated_at' => DB::raw('NOW()'),
				'created_at' => DB::raw('NOW()'),
			),

//			array(
//				'name_place' => 'Бухгалтерия',
//				'end_pointer' => 'Грабко',
//				'updated_at' => DB::raw('NOW()'),
//				'created_at' => DB::raw('NOW()'),
//			),

		);

		DB::table('users')->insert($data);
    }
}

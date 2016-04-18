<?php

use Illuminate\Database\Seeder;

class CatridgeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	public function run()
	{
		DB::table('catridges')->delete();

		$data = array(
			array(
				'current_id' => 1017544,
				'manifacture' => 'Canon',
				'model' => '2055',
				'type' => 'A',
				'location' => 'Склад',
				'master' => 'Володя',
				'updated_at' => DB::raw('NOW()'),
				'created_at' => DB::raw('NOW()'),
			),

			array(
				'current_id' => 54645446,
				'manifacture' => 'Canon',
				'model' => '2055b',
				'type' => 'B',
				'location' => 'Мастерская',
				'master' => 'Максим',
				'updated_at' => DB::raw('NOW()'),
				'created_at' => DB::raw('NOW()'),
			),

			array(
				'current_id' => 54644545446,
				'manifacture' => 'Canon',
				'model' => '2055b',
				'type' => 'A',
				'location' => 'Склад',
				'master' => 'Максим',
				'updated_at' => DB::raw('NOW()'),
				'created_at' => DB::raw('NOW()'),
			),

			array(
				'current_id' => 5411545446,
				'manifacture' => 'Canon',
				'model' => '2055b',
				'type' => 'С',
				'location' => 'Склад',
				'master' => 'Володя',
				'updated_at' => DB::raw('NOW()'),
				'created_at' => DB::raw('NOW()'),
			),

		);

		DB::table('catridges')->insert($data);
	}
}

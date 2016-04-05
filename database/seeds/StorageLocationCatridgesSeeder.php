<?php

use Illuminate\Database\Seeder;

class StorageLocationCatridgesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('storage_location_catridges')->delete();

		$data = array(
			array(
				'category_name' => 'Принтер',
				'storage_id' => '2',
				'updated_at' => DB::raw('NOW()'),
				'created_at' => DB::raw('NOW()'),
			),

			array(
				'category_name' => 'Пустые|Ремонт',
				'storage_id' => '',
				'updated_at' => DB::raw('NOW()'),
				'created_at' => DB::raw('NOW()'),
			),

			array(
				'category_name' => 'Склад',
				'storage_id' => '',
				'updated_at' => DB::raw('NOW()'),
				'created_at' => DB::raw('NOW()'),
			),

			array(
				'category_name' => 'В списанные',
				'storage_id' => '',
				'updated_at' => DB::raw('NOW()'),
				'created_at' => DB::raw('NOW()'),
			),

		);

		DB::table('storage_location_catridges')->insert($data);
    }
}

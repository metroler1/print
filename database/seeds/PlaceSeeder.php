<?php

use Illuminate\Database\Seeder;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('place')->delete();

		$data = array(
			array(
				'name_place' => 'Немига',
				'end_pointer' => 'Хиневич',
				'updated_at' => DB::raw('NOW()'),
				'created_at' => DB::raw('NOW()'),
			),

			array(
				'name_place' => 'Бухгалтерия',
				'end_pointer' => 'Грабко',
				'updated_at' => DB::raw('NOW()'),
				'created_at' => DB::raw('NOW()'),
			),

		);

		DB::table('place')->insert($data);
    }
}

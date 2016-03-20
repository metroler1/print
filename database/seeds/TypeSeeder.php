<?php

use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('types')->delete();

		$data = array(
			array(
				'type' => 'A',
				'updated_at' => DB::raw('NOW()'),
				'created_at' => DB::raw('NOW()'),
			),

			array(
				'type' => 'B',
				'updated_at' => DB::raw('NOW()'),
				'created_at' => DB::raw('NOW()'),
			),

			array(
				'type' => 'C',
				'updated_at' => DB::raw('NOW()'),
				'created_at' => DB::raw('NOW()'),
			),
			array(
				'type' => 'D',
				'updated_at' => DB::raw('NOW()'),
				'created_at' => DB::raw('NOW()'),
			),

			array(
				'type' => 'F',
				'updated_at' => DB::raw('NOW()'),
				'created_at' => DB::raw('NOW()'),
			),
		);

		DB::table('types')->insert($data);
    }
}

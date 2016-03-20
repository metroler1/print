<?php

use Illuminate\Database\Seeder;

class ManifactureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('manifacture')->delete();

		$data = array(
			array(
				'manifacture' => 'Canon',
				'updated_at' => DB::raw('NOW()'),
				'created_at' => DB::raw('NOW()'),
			),
			array(
				'manifacture' => 'HP',
				'updated_at' => DB::raw('NOW()'),
				'created_at' => DB::raw('NOW()'),
			),
		);

		DB::table('manifacture')->insert($data);

    }
}

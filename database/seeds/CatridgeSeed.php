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
				'current_id' => 2041050,
				'manifacture' => 'HP',
				'model' => 'CE505XC',
				'type' => 'I',
				'location' => 'Склад',
				'master' => 'Максим',
				'updated_at' => DB::raw('NOW()'),
				'created_at' => DB::raw('NOW()'),
			),

            array(
                'current_id' => 2041021,
                'manifacture' => 'HP',
                'model' => 'CE505XC',
                'type' => 'I',
                'location' => 'Склад',
                'master' => 'Максим',
                'updated_at' => DB::raw('NOW()'),
                'created_at' => DB::raw('NOW()'),
            ),

            array(
                'current_id' => 2041031,
                'manifacture' => 'HP',
                'model' => 'CE505XC',
                'type' => 'I',
                'location' => 'Склад',
                'master' => 'Максим',
                'updated_at' => DB::raw('NOW()'),
                'created_at' => DB::raw('NOW()'),
            ),

            array(
                'current_id' => 2041019,
                'manifacture' => 'HP',
                'model' => 'Q6511A',
                'type' => 'A',
                'location' => 'Склад',
                'master' => 'Максим',
                'updated_at' => DB::raw('NOW()'),
                'created_at' => DB::raw('NOW()'),
            ),

            array(
                'current_id' => 2041046,
                'manifacture' => 'Canon',
                'model' => '103/303/703',
                'type' => 'B',
                'location' => 'Склад',
                'master' => 'Владимир',
                'updated_at' => DB::raw('NOW()'),
                'created_at' => DB::raw('NOW()'),
            ),

            array(
                'current_id' => 2041062,
                'manifacture' => 'HP',
                'model' => 'Q2612A',
                'type' => 'B',
                'location' => 'Склад',
                'master' => 'Владимир',
                'updated_at' => DB::raw('NOW()'),
                'created_at' => DB::raw('NOW()'),
            ),

            array(
                'current_id' => 2041055,
                'manifacture' => 'HP',
                'model' => 'CB435A',
                'type' => 'C',
                'location' => 'Склад',
                'master' => 'Владимир',
                'updated_at' => DB::raw('NOW()'),
                'created_at' => DB::raw('NOW()'),
            ),

            array(
                'current_id' => 2041030,
                'manifacture' => 'Other',
                'model' => '01805-322462',
                'type' => 'A',
                'location' => 'Склад',
                'master' => 'Максим',
                'updated_at' => DB::raw('NOW()'),
                'created_at' => DB::raw('NOW()'),
            ),

            array(
                'current_id' => 2041041,
                'manifacture' => 'Canon',
                'model' => 'FX10',
                'type' => 'D',
                'location' => 'Склад',
                'master' => 'Владимир',
                'updated_at' => DB::raw('NOW()'),
                'created_at' => DB::raw('NOW()'),
            ),

            array(
                'current_id' => 2041056,
                'manifacture' => 'Canon',
                'model' => 'FX10',
                'type' => 'D',
                'location' => 'Склад',
                'master' => 'Владимир',
                'updated_at' => DB::raw('NOW()'),
                'created_at' => DB::raw('NOW()'),
            ),

            array(
                'current_id' => 2041048,
                'manifacture' => 'Canon',
                'model' => 'CE285A',
                'type' => 'G',
                'location' => 'Склад',
                'master' => 'Владимир',
                'updated_at' => DB::raw('NOW()'),
                'created_at' => DB::raw('NOW()'),
            ),

            array(
                'current_id' => 2041010,
                'manifacture' => 'Canon',
                'model' => 'CE285A',
                'type' => 'G',
                'location' => 'Склад',
                'master' => 'Владимир',
                'updated_at' => DB::raw('NOW()'),
                'created_at' => DB::raw('NOW()'),
            ),

            array(
                'current_id' => 2041011,
                'manifacture' => 'Canon',
                'model' => 'CE285A',
                'type' => 'G',
                'location' => 'Склад',
                'master' => 'Владимир',
                'updated_at' => DB::raw('NOW()'),
                'created_at' => DB::raw('NOW()'),
            ),

            array(
                'current_id' => 2041043,
                'manifacture' => 'HP',
                'model' => '36A',
                'type' => 'E',
                'location' => 'Склад',
                'master' => 'Владимир',
                'updated_at' => DB::raw('NOW()'),
                'created_at' => DB::raw('NOW()'),
            ),

            array(
                'current_id' => 2041069,
                'manifacture' => 'Other',
                'model' => 'PL-CB435/436A/712/713',
                'type' => 'E',
                'location' => 'Склад',
                'master' => 'Владимир',
                'updated_at' => DB::raw('NOW()'),
                'created_at' => DB::raw('NOW()'),
            ),

            array(
                'current_id' => 2041061,
                'manifacture' => 'HP',
                'model' => 'Q2612A',
                'type' => 'B',
                'location' => 'Склад',
                'master' => 'Владимир',
                'updated_at' => DB::raw('NOW()'),
                'created_at' => DB::raw('NOW()'),
            ),

            array(
                'current_id' => 2041027,
                'manifacture' => 'Canon',
                'model' => '103/303/703',
                'type' => 'B',
                'location' => 'Склад',
                'master' => 'Владимир',
                'updated_at' => DB::raw('NOW()'),
                'created_at' => DB::raw('NOW()'),
            ),

            array(
                'current_id' => 2041022,
                'manifacture' => 'HP',
                'model' => 'Q2612A',
                'type' => 'B',
                'location' => 'Склад',
                'master' => 'Владимир',
                'updated_at' => DB::raw('NOW()'),
                'created_at' => DB::raw('NOW()'),
            ),

            array(
                'current_id' => 2041052,
                'manifacture' => 'HP',
                'model' => '103/303/703',
                'type' => 'B',
                'location' => 'Склад',
                'master' => 'Владимир',
                'updated_at' => DB::raw('NOW()'),
                'created_at' => DB::raw('NOW()'),
            ),
        );

		DB::table('catridges')->insert($data);
	}
}

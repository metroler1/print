<?php

use Illuminate\Database\Seeder;

class MasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('master')->delete();

		$data = array(
			array(
				'master_name' => 'ИП Попов',
				'updated_at' => DB::raw('NOW()'),
				'created_at' => DB::raw('NOW()'),
			),

			array(
				'master_name' => 'Володя',
				'updated_at' => DB::raw('NOW()'),
				'created_at' => DB::raw('NOW()'),
			),

		);

		DB::table('master')->insert($data);
    }
}

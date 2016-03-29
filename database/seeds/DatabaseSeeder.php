<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$this->call(ManifactureSeeder::class);
		$this->call(TypeSeeder::class);
		$this->call(PlaceSeeder::class);
		$this->call(MasterSeeder::class);
		$this->call(UserTableSeeder::class);
		$this->call(CatridgeSeed::class);
    }
}

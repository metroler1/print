<?php

use Illuminate\Database\Seeder;

class PrinterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('printers')->delete();

        $data = array(
            array(
                'current_id' => '111111111111',
                'end_pointer' => 'Хиневич',
                'updated_at' => DB::raw('NOW()'),
                'created_at' => DB::raw('NOW()'),
            ),


        );

        DB::table('printers')->insert($data);
    }
}

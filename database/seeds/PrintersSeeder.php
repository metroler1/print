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
                'current_id' => 2044029,
                'manifacture' => 'HP',
                'model' => '4200dn',
                'type' => 'F',
                'place' => 'Старажевская',
                'room' => '',
                'person' => '',
                'ip' => '192.168.2.29',
                'master' => 'Владимир',
                'auxiliary' => '',
                'updated_at' => DB::raw('NOW()'),
                'created_at' => DB::raw('NOW()'),
            ),

            array(
                'current_id' => 2044026,
                'manifacture' => 'HP',
                'model' => '2055dn',
                'type' => 'I',
                'place' => 'Старажевская',
                'room' => 'Библиотека',
                'person' => '',
                'ip' => '192.168.2.26',
                'master' => 'Максим',
                'auxiliary' => '',
                'updated_at' => DB::raw('NOW()'),
                'created_at' => DB::raw('NOW()'),
            ),

            array(
                'current_id' => 2044027,
                'manifacture' => 'HP',
                'model' => '2055dn',
                'type' => 'I',
                'place' => 'Старажевская',
                'room' => 'Библиотека',
                'person' => '',
                'ip' => '192.168.2.27',
                'master' => 'Максим',
                'auxiliary' => '',
                'updated_at' => DB::raw('NOW()'),
                'created_at' => DB::raw('NOW()'),
            ),

            array(
                'current_id' => 2044030,
                'manifacture' => 'HP',
                'model' => '2055dn',
                'type' => 'I',
                'place' => 'Старажевская',
                'room' => 'Библиотека',
                'person' => '',
                'ip' => '192.168.2.30',
                'master' => 'Максим',
                'auxiliary' => '',
                'updated_at' => DB::raw('NOW()'),
                'created_at' => DB::raw('NOW()'),
            ),

            array(
                'current_id' => 2031001,
                'manifacture' => 'Canon',
                'model' => 'LBP6750dn',
                'type' => 'W',
                'place' => 'Старажевская',
                'room' => 'Toefl',
                'person' => '',
                'ip' => '192.168.2.11',
                'master' => 'Максим',
                'auxiliary' => '',
                'updated_at' => DB::raw('NOW()'),
                'created_at' => DB::raw('NOW()'),
            ),

            array(
                'current_id' => 2031002,
                'manifacture' => 'Canon',
                'model' => 'LBP6750dn',
                'type' => 'W',
                'place' => 'Старажевская',
                'room' => 'Toefl',
                'person' => '',
                'ip' => '192.168.2.12',
                'master' => 'Максим',
                'auxiliary' => '',
                'updated_at' => DB::raw('NOW()'),
                'created_at' => DB::raw('NOW()'),
            ),

            array(
                'current_id' => '',
                'manifacture' => 'Canon',
                'model' => '3010B',
                'type' => 'C',
                'place' => 'Старажевская',
                'room' => 'Юридический',
                'person' => '',
                'ip' => '',
                'master' => 'Владимир',
                'auxiliary' => '',
                'updated_at' => DB::raw('NOW()'),
                'created_at' => DB::raw('NOW()'),
            ),

            array(
                'current_id' => '',
                'manifacture' => 'Canon',
                'model' => '3010B',
                'type' => 'C',
                'place' => 'Старажевская',
                'room' => 'Бухгалтерия',
                'person' => 'Наталия Николаевна',
                'ip' => '',
                'master' => 'Владимир',
                'auxiliary' => '',
                'updated_at' => DB::raw('NOW()'),
                'created_at' => DB::raw('NOW()'),
            ),

            array(
                'current_id' => '02043004',
                'manifacture' => 'Canon',
                'model' => 'MF4350D',
                'type' => 'D',
                'place' => 'Старажевская',
                'room' => 'Бухгалтерия',
                'person' => '',
                'ip' => '',
                'master' => 'Владимир',
                'auxiliary' => '',
                'updated_at' => DB::raw('NOW()'),
                'created_at' => DB::raw('NOW()'),
            ),

            array(
                'current_id' => '02043006',
                'manifacture' => 'Canon',
                'model' => 'MF4350D',
                'type' => 'D',
                'place' => 'Старажевская',
                'room' => 'ОРП',
                'person' => 'Бирюк',
                'ip' => '',
                'master' => 'Владимир',
                'auxiliary' => '',
                'updated_at' => DB::raw('NOW()'),
                'created_at' => DB::raw('NOW()'),
            ),

            array(
                'current_id' => '02043005',
                'manifacture' => 'HP',
                'model' => 'P1522nf',
                'type' => 'E',
                'place' => 'Старажевская',
                'room' => 'Методисты',
                'person' => '',
                'ip' => '',
                'master' => 'Владимир',
                'auxiliary' => '',
                'updated_at' => DB::raw('NOW()'),
                'created_at' => DB::raw('NOW()'),
            ),





        );

        DB::table('printers')->insert($data);
    }
}

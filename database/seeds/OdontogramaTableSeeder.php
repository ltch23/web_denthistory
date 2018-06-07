<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class OdontogramaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('odontogramas')->insert([
            'id_usuario'=> 1,
        ]);
    }
}

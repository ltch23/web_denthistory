<?php

use Illuminate\Database\Seeder;

class HistoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Historias::class,5)->create();
    }
}

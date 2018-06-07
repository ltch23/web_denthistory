<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('users')->insert([
            'tipo'=> 0,
            'nombres' => $faker->firstName,
            'apellidos'=>$faker->lastName,
            'correo' => 'paciente@gmail.com',
            'password' => bcrypt('123'),
            'menor_edad' =>$faker->boolean(),
            'dni'=>$faker->randomNumber(),
            'fecha_nacimiento'=>$faker->date(),
            'sexo'=>$faker->boolean(),
            'domicilio'=>$faker->address,
            'localidad'=>$faker->country,
            'telefono'=>$faker->phoneNumber,
            'alergias'=>$faker->text(5),
            'hereditarios'=>$faker->text(5),
            'id_odontograma'=>1,
            'remember_token' => str_random(10),
        ]);
        DB::table('users')->insert([
            'tipo'=> 1,
            'nombres' => $faker->firstName,
            'apellidos'=>$faker->lastName,
            'correo' => 'odonto@gmail.com',
            'password' => bcrypt('123'),
            'fecha_nacimiento'=>$faker->date(),
            'sexo'=>$faker->boolean(),
            'domicilio'=>$faker->address,
            'localidad'=>$faker->country,
            'telefono'=>$faker->phoneNumber,
            'remember_token' => str_random(10),
        ]);

        DB::table('users')->insert([
            'tipo'=> 1,
            'nombres' => $faker->firstName,
            'apellidos'=>$faker->lastName,
            'correo' => 'doctor@gmail.com',
            'password' => bcrypt('123'),
            'fecha_nacimiento'=>$faker->date(),
            'sexo'=>$faker->boolean(),
            'domicilio'=>$faker->address,
            'localidad'=>$faker->country,
            'telefono'=>$faker->phoneNumber,
            'remember_token' => str_random(10),
        ]);

        //factory(App\User::class,5)->create();

    }
}

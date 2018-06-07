<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {

    return [
        'tipo'=> $faker->boolean(),
        'nombres' => $faker->firstName,
        'apellidos'=>$faker->lastName,
        'correo' => $faker->unique()->safeEmail,
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
        'id_odontograma'=>$faker->numberBetween(1,2),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Historias::class, function (Faker\Generator $faker) {
    return [
        'id_usuario'=> 1,
        'id_doctor' => $faker->numberBetween(2,3),
        'fecha' => $faker->date(),
        'motivo_consulta' => $faker->text,
        'diagnostico' => $faker->text,
        'observaciones' => $faker->text,
        'tratamiento' => $faker->text,
        'radiografia' => $faker->text,
        'img_radiografia' => 'img/radiografias/h_1.png',
        'id_odontograma' => $faker->numberBetween(1,2),
    ];
});

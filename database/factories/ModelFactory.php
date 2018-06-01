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
    static $password;

    return [
        'tipo'=> $faker->boolean(),
        'nombres' => $faker->firstName,
        'apellidos'=>$faker->lastName,
        'correo' => $faker->unique()->safeEmail,
        'contrasenia' => $password ?: $password = bcrypt('123'),
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
        'id_usuario'=>$faker->numberBetween(1,3),
        'id_doctor' => $faker->numberBetween(4,5),
        'fecha' => $faker->date(),
        'motivo_consulta' => $faker->text,
        'diagnostico' => $faker->text,
        'observaciones' => $faker->text,
        'tratamiento' => $faker->text,
        'radiografia' => $faker->imageUrl(),
        'id_odontograma' => $faker->numberBetween(1,2),
    ];
});

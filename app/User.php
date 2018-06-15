<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tipo', 'nombres', 'apellidos','correo','password','sangre','menor_edad','tutor','dni','fecha_nacimiento','sexo',
        'residencia','clinica_pac','estado_civil','num_hijos','telefono','alergias','hereditarios','odontograma','cirugia','telefono_emer', 'domicilio', 'localidad'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autorizaciones extends Model
{
    protected $table = 'autorizaciones';
    protected $fillable = ['id_usuario','id_doctor', 'activo'];
    public $timestamps = false;
}

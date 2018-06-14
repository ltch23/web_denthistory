<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historias extends Model
{
    protected $table = 'historias';
    protected $fillable = ['id_usuario','id_doctor', 'fecha','motivo_consulta','diagnostico','observaciones','tratamiento',
                            'radiografia','img_radiografia','cambios'];
    public $timestamps = false;
}

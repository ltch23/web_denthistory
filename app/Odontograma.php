<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Odontograma extends Model
{
    protected $table = 'historias';
    protected $fillable = [
        'diente1','diente2','diente3','diente4','diente5','diente6','diente7','diente8','diente9','diente10','diente11',
        'diente12','diente13','diente14','diente15','diente16','diente17','diente18','diente19','diente20','diente21','diente22',
        'diente23','diente24','diente25','diente26','diente27','diente28','diente29','diente30','diente31','diente32',
    ];
    public $timestamps = false;
}

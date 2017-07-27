<?php

namespace EncDoc;

use Illuminate\Database\Eloquent\Model;

class CEnc extends Model
{
    protected $table = 'cencs';

    protected $fillable = [ 'year', 'cuatrimestre', 'asignatura', 'asignatura_name', 'modalidad', 
        'name', 'cp1', 'cp2', 'cp3', 'cp4', 'cp5', 'cp6', 'cp7', 'cp8', 'cp9', 'cp10', 'cp11', 'cp12', 'cp13', 'cp14',
        'cp15', 'cp16', 'cp17', 'cp18', 'user_id', 'docente_id'
    ];
}


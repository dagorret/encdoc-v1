<?php

namespace EncDoc;

use Illuminate\Database\Eloquent\Model;


/**
 * EncDoc\BEnc
 *
 * @mixin \Eloquent
 */
class BEnc extends Model
{
    protected $table = 'bencs';

    protected $fillable = [ 'year', 'cuatrimestre', 'asignatura', 'departamento', 'modalidad', 'informate',
        'name', 'dedicacion', 'cargo', 'caracter', 'bp1', 'bp2', 'bp3', 'bp4', 'bp5', 'bp6', 'bp7', 'bp8',
        'bp9', 'bp10', 'bp11', 'bp12', 'bp13', 'bp14', 'bp15', 'otras', 'user_id', 'docente_id'
    ];

}

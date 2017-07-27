<?php

namespace EncDoc;

use Illuminate\Database\Eloquent\Model;

/**
 * EncDoc\Materia
 *
 * @property integer $id
 * @property integer $codigo
 * @property string $nombre
 * @method static \Illuminate\Database\Query\Builder|\EncDoc\Materia whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\EncDoc\Materia whereCodigo($value)
 * @method static \Illuminate\Database\Query\Builder|\EncDoc\Materia whereNombre($value)
 * @mixin \Eloquent
 */
class Materia extends Model
{
    protected $table = 'materias';
}

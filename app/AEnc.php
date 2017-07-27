<?php

namespace EncDoc;

use Illuminate\Database\Eloquent\Model;

/**
 * EncDoc\AEnc
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $dni
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property integer $year
 * @property string $departamento
 * @property string $cargo
 * @property string $caracter
 * @property string $dedicacion
 * @property string $docencia
 * @property string $investigacion
 * @property string $extension
 * @property string $gestion
 * @property string $capacitacion
 * @property string $estado
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \EncDoc\User $user
 * @method static \Illuminate\Database\Query\Builder|\EncDoc\AEnc whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\EncDoc\AEnc whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\EncDoc\AEnc whereDni($value)
 * @method static \Illuminate\Database\Query\Builder|\EncDoc\AEnc whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\EncDoc\AEnc whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\EncDoc\AEnc wherePhone($value)
 * @method static \Illuminate\Database\Query\Builder|\EncDoc\AEnc whereYear($value)
 * @method static \Illuminate\Database\Query\Builder|\EncDoc\AEnc whereDepartamento($value)
 * @method static \Illuminate\Database\Query\Builder|\EncDoc\AEnc whereCargo($value)
 * @method static \Illuminate\Database\Query\Builder|\EncDoc\AEnc whereCaracter($value)
 * @method static \Illuminate\Database\Query\Builder|\EncDoc\AEnc whereDedicacion($value)
 * @method static \Illuminate\Database\Query\Builder|\EncDoc\AEnc whereDocencia($value)
 * @method static \Illuminate\Database\Query\Builder|\EncDoc\AEnc whereInvestigacion($value)
 * @method static \Illuminate\Database\Query\Builder|\EncDoc\AEnc whereExtension($value)
 * @method static \Illuminate\Database\Query\Builder|\EncDoc\AEnc whereGestion($value)
 * @method static \Illuminate\Database\Query\Builder|\EncDoc\AEnc whereCapacitacion($value)
 * @method static \Illuminate\Database\Query\Builder|\EncDoc\AEnc whereEstado($value)
 * @method static \Illuminate\Database\Query\Builder|\EncDoc\AEnc whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\EncDoc\AEnc whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class AEnc extends Model
{
    protected $table = 'aencs';

    protected $fillable = [
        'dni', 'name', 'email', 'email', 'phone', 'year', 'departamento', 'cargo', 'caracter', 'dedicacion',
        'docencia', 'investigacion', 'extension', 'gestion', 'extension', 'capacitacion'
    ];

    public function user()
    {
        return $this->belongsTo('\EncDoc\User');
    }
}

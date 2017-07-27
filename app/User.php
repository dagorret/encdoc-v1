<?php

namespace EncDoc;

use Illuminate\Foundation\Auth\User as Authenticatable;
//

/**
 * Class User
 *
 * @package EncDoc
 * @mixin \Eloquent
 * @property integer $id
 * @property string $name
 * @property string $dni
 * @property string $email
 * @property string $password
 * @property boolean $admin
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\EncDoc\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\EncDoc\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\EncDoc\User whereDni($value)
 * @method static \Illuminate\Database\Query\Builder|\EncDoc\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\EncDoc\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\EncDoc\User whereAdmin($value)
 * @method static \Illuminate\Database\Query\Builder|\EncDoc\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\EncDoc\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\EncDoc\User whereUpdatedAt($value)
 * @property-read \EncDoc\AEnc $aenc
 * @property-read \Illuminate\Database\Eloquent\Collection|\EncDoc\BEnc[] $benc
 */
class User extends Authenticatable
{
    protected $table = 'users';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'dni', 'admin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function aenc()
    {
        return $this->hasMany('\EncDoc\AEnc');
    }

    public function benc()
    {
        return $this->hasMany('\EncDoc\BEnc');
    }
}

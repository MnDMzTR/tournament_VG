<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concursante extends Model
{
    protected $table = 'concursante';
    protected $primaryKey = 'id';

    protected $fillable = ['nombre', 'apaterno', 'amaterno', 'email', 'nickname', 'password','id_carrera','id_personaje','id_escuela'];

    protected $hidden = ['id'];
    public $timestamps = false;


    public function carrera()
    {
        return $this->hasOne(Carrera::class, 'id', 'id_carrera');
    }
    public function escuela()
    {
        return $this->hasOne(Escuela::class, 'id', 'id_escuela');
    }
    public function personaje()
    {
        return $this->hasOne(Personaje::class, 'id', 'id_personaje');
    }
}

<?php

namespace Horarios;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $table= 'profesor';
    protected $primaryKey='cedula';
    public $timestamps= false;

    protected $fillable = [
    	'nombre',
    	'telefono',
    	'correo',
    	'estado'
    ]:

    protected $guarded=[
    ];
}

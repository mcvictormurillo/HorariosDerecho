<?php

namespace Horarios;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $table= 'profesor';
    protected $primaryKey='correo';
    public $timestamps= false;

    protected $fillable = [
    	'nombre',
    	'telefono',
    	'estado',
        'correo'
    ];

    protected $guarded=[
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boleta extends Model
{
    protected $fillable=[
    	'persona_id',
    	'descripcion',
        'deuda',
        'total'
    ];

    public function persona(){
        return $this->belongsTo('App\Persona');
    }

    public function productos(){
        return $this->belongsToMany('App\Productos');
    }
}

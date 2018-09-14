<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable=[
    	'name',
    	'apepaterno',
        'apematerno',
        'dni',
        'email'
    ];

    public function persona(){
        return $this->hasMany('App\Boleta');
    }
}

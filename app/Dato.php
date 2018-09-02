<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dato extends Model
{
    public $timestamps = false;
    protected $table ="formulario";
    protected $fillable=['tipo_ciclismo','anios','horas','marcas'];
   
    
}

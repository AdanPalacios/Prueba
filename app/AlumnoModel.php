<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlumnoModel extends Model
{
      
      // Declaro los campos que usaré de la tabla 'jugos' 
      protected $fillable = ['nombre', 'apellidos', 'edad', 'email', 'telefono'];
}

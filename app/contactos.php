<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contactos extends Model
{
  protected $table = 'contactos';
  protected $fillable = ['nombre','apellidos','telefono','email','direccion'];
}

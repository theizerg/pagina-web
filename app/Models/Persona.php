<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
     protected $fillable = [
        'nombre',
        'apellido',
        'profesion' ,
        'pensamiento',
        'icono_red_social',
        'red_social',
        'imagen'
    ];

  protected $hidden = [];
 





  public function getEncodeIDAttribute()
    {
        return \Hashids::encode($this->id);
    }


  public function getDisplayStatusAttribute()
    {
        return $this->status == 1 ? 'Publicado' : 'No publicado';

    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
     protected $table = 'equipos';

  protected $fillable = [
        'titulo', 'cuerpo', 'status'
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

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
   
  protected $fillable = [
        'titulo', 'cuerpo', 'status','class','icono'
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

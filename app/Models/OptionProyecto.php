<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OptionProyecto extends Model
{
    

      protected $fillable = [
        'titulo',
        'cuerpo',
        'class' ,
        'status',
        'icono',
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

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
   


  protected $table = 'comentarios';

  protected $fillable = [
        'nombre', 'apellido', 'correo','mensaje', 'fecha'
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

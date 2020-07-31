<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Headers extends Model
{
    protected $table = 'headers';

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

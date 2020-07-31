<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OptionDonaciones extends Model
{
	 protected $table = 'option_donaciones';
  
    protected $fillable = [
        'titulo',
        'cuerpo',
        'class' ,
        'status' 
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

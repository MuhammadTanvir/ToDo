<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
//    Accesors
//    public function getTitleAttribute($value)
//    {
//      return ucfirst($value);
//    }
    
//    Mutators
    public function setTitleAttribute($value)
    {
      return $this->attributes['title']=ucfirst($value);
    }
    
}

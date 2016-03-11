<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    public function bedrooms(){

      return $this->hasMany(Bedroom::class);
    }
}

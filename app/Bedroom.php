<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bedroom extends Model
{
    protected $fillable = ['name', 'status', 'beds'];

    public function hotel(){

      return $this->belongsTo(Hotel::class);
    }
}

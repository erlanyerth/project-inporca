<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Areaafectada extends Model
{
    public function Area(){
        return $this->belongsTo(Area::class); 
    }
}

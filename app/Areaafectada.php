<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Areaafectada extends Model
{
    public function Area(){
        return $this->belongsTo(Area::class); 
    }
    public function incidencia(){
        return $this->belongsTo(Incidente::class); //un seguimiento esta asociado a una incidente
   }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seguimincident extends Model
{
    public function incidencia(){
         return $this->belongsTo(Incidente::class); //un seguimiento esta asociado a una incidente
    }
    public function User(){
        return $this->belongsTo(User::class); //un seguimiento esta asociado a una incidente
   }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incidente extends Model
{
    public function Servicio(){
        return $this->belongsTo(Servicio::class); 
    }
    public function User(){
        return $this->belongsTo(User::class); 
    }
    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monitoreo extends Model
{
    public function User(){
        return $this->belongsTo(User::class); 
    }
    public function Servicio(){
        return $this->belongsTo(Servicio::class); 
    }
}

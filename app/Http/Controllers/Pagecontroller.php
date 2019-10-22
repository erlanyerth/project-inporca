<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagecontroller extends Controller
{
    public  function inicio(){
        return view('login');
    }
    public function reguser(){

    }
    public function regservi(){
        return view('/regservicio');
    }
    public function categoria(){
        return view('/regcategoria');
    }
    public function seguimiento(){
        return view('/seguimientoincid');
    }
    public function monitoreo(){
        return view('/monitoreo');
    }
    public function regincidente(){
        return view('/registrarincid');
    }
}

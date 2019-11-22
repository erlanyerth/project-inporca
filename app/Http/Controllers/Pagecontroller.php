<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class Pagecontroller extends Controller
{
    function calcodigo($max, $valor) {
        if ( $max == 0){
            $codigo = $valor;
        }
        else{
            $codigo = $max + 1;
        }
        return $codigo;
    }
    public  function inicio(){
        return view('auth.login');
    }
    public function reguser(){
        return view('/auth.register');
    }
    public function getCareers(Request $request)
    {
        return $request->all();
        if ($request->ajax()) {
            $careers = Servicio::where('idcateg', 5000)->get();
            foreach ($careers as $career) {
                $careersArray[$career->id] = $career->name;
            }
            return response()->json($careersArray);
        }
    }
 
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class Pagecontroller extends Controller
{
    public  function inicio(){
        return view('login');
    }
    public function reguser(){

    }
    public function regservi(){
        $max = App\Servicio::all()->max('id');
        if ( $max == 0){
            $codigo = 6000;
        }
        else{
            $codigo = $max + 1;
        }
        $categorias = App\Categoria::all();
        return view('/regservicio', compact('categorias', 'codigo'));
    }
    public function categoria(){
        
        $max = App\Categoria::all()->max('id');
        if ( $max == 0){
            $codigo = 5000;
        }
        else{
            $codigo = $max + 1;
        }
        
        return view('/regcategoria', compact('codigo'));
    }
    public function area(){
        
        $max = App\Area::all()->max('id');
        if ( $max == 0){
            $codigo = 7000;
        }
        else{
            $codigo = $max + 1;
        }
        
        return view('/area', compact('codigo'));
    }
    public function seguimiento(){
        return view('/seguimientoincid');
    }
    public function monitoreo(){
        $servicios = App\Servicio::all();
        return view('/monitoreo', compact('servicios'));
    }
    public function regincidente(){
        $categorias = App\Categoria::all();
        $areas = App\Area::all();
        return view('/registrarincid', compact('categorias', 'areas'));
    }
    public function crearcategoria(Request $request){
       // return $request->all(); //para consultar que los datos viajen bien
                $request->validate([
                    'nombre' => 'required'
                ]);         

                $categorianueva = new App\Categoria;
                $categorianueva->nombre = $request->nombre;
                $categorianueva->id = $request->id;
                $categorianueva->status = "Activo";

                $categorianueva->save();
                return back()->with('mensaje', '¡La categoría se ha registrado correctamente!');
    }
    public function creararea(Request $request){
        // return $request->all(); //para consultar que los datos viajen bien
                 $request->validate([
                     'nombre' => 'required'
                 ]);         
 
                 $areanueva = new App\Area;
                 $areanueva->nombre = $request->nombre;
                 $areanueva->id = $request->id;
                 $areanueva->status = "Activo";
 
                 $areanueva->save();
                 return back()->with('mensaje', '¡El Área se ha registrado correctamente!');
     }
    public function crearservicio(Request $request){
        //return $request->all(); //para consultar que los datos viajen bien
       /* $request->validate([
            'nombre' => 'required',
            'categoria' => 'required',
            'frecuencia' => 'required',
            'idcateg' => 'required'
        ]);   
        */
                 $servicionuevo = new App\Servicio;
                 $servicionuevo->nombre = $request->nombre;
                 $servicionuevo->id = $request->id;
                 $servicionuevo->statusact = "Activo";
                 $servicionuevo->statuscomport = "Bien";
                 $servicionuevo->frecuencia = $request->frecuencia;
                 $servicionuevo->idcateg = $request->idcateg;

                 $servicionuevo->save();
                 
                 return back()->with('mensaje', '¡El servicio se ha registrado correctamente!');
     }
 
}

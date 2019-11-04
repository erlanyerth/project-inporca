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
    public function regservi(){
        $valor = 6000; 
        $max = App\Servicio::all()->max('id');
        $codigo = $this-> calcodigo($max, $valor);
        
        $categorias = App\Categoria::all();
        return view('/regservicio', compact('categorias', 'codigo'));
    }
    public function categoria(){
        $valor = 5000;
        $max = App\Categoria::all()->max('id');
        $codigo = $this-> calcodigo($max, $valor);
        
        return view('/regcategoria', compact('codigo'));
    }
    public function area(){
        $valor = 2000;
        $max = App\Area::all()->max('id');
        $codigo = $this-> calcodigo($max, $valor);
        
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

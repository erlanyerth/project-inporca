<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Servicio;
class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //return auth()->user();
       
        
        $max = App\Servicio::all()->max('id');
        if ( $max == 0){
            $codigo = 6000;
        }
        else{
            $codigo = $max + 1;
        }
       // $categorias = App\Categoria::all();
       $categorias = App\Categoria::where('status', 'Activo')->get();
        return view('regservicio', compact('categorias', 'codigo'));
        //return view('regservicio', compact('servicios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'idcateg' => 'required',
            'frecuencia' => 'required'
          ]);   
        $servicionuevo = new Servicio();
                 $servicionuevo->nombre = $request->nombre;
                 $servicionuevo->id = $request->id;
                 $servicionuevo->statusact = "Activo";
                 $servicionuevo->statuscomport = "Ok";
                 $servicionuevo->frecuencia = $request->frecuencia;
                 $categoriaid = App\Categoria::where('nombre', $request->idcateg)->first();
                 $servicionuevo->idcateg = $categoriaid->id;
                 $servicionuevo->save();
                 
                 return back()->with('mensaje', '¡El servicio se ha registrado correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}



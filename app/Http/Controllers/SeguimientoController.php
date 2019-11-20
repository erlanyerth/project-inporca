<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Seguimincident;
use App\Incidente;
use App\Servicio;
class SeguimientoController extends Controller
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
      
        //$servicio = App\Servicio::all();
        $servicio = App\Servicio::where('statuscomport', 'Failed')
        ->orWhere('statuscomport', 'Warning')->get();
        $listserv = App\Servicio::where('statusact', 'Activo')->orderBy('statuscomport', 'asc')
                                 ->get();
        return view('seguimientoincid', compact('servicio', 'listserv'));
        //return view('/seguimientoincid');
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
            'fechayhora' => 'required',
            'servicio' => 'required',
            'accion' => 'required',
            'status' => 'required'
          ]);   
        $seguimiento = new Seguimincident();
        $seguimiento->observacion = $request->observacion;
        $seguimiento->accion = $request->accion;
        $seguimiento->status = $request->status;
        $seguimiento->fecha_seg = $request->fechayhora;
        $seguimiento->id_responsable = auth()->user()->id;
        //$idserv = App\Servicio::where('nombre', $request->servicio)->first();       
        $idincident = App\Incidente::where('id_serv', $request->servicio)->max('id');
        $seguimiento->id_incident = $idincident;

        $updateserv = App\Servicio::find($request->servicio);
        $updateserv->statuscomport = $request->status;
        $updateserv->save();
        $seguimiento->save();
               
                 return back()->with('mensaje', '¡El seguimiento se ha registrado correctamente!');
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
    public function update(Request $request)
    {
        //$serviactualizar = App\Servicio::find($request->servicio);
        //$serviactualizar->statuscomport = $request->status;
        //$serviactualizar->save();
       //return back();
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

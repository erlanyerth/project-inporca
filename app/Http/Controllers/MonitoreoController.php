<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Servicio;
use App\Monitoreo;
class MonitoreoController extends Controller
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
        $servicios = App\Servicio::where('statuscomport', 'Ok')->get();
        $listserv = App\Servicio::where('statusact', 'Activo')->orderBy('statuscomport', 'asc')
                                 ->get();
        return view('/monitoreo', compact('servicios', 'listserv'));
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
        //return $request->all();
        
        //$monitor->nombre = $request->nombre;
        //$monitor->id = $request->idcateg;
        //$monitor->status = "Activo";
        foreach ($request as $monitor){
            $monitoreo = new Monitoreo();
            $monitoreo->id_responsable = auth()->user()->id;
            //$monitoreo->fecha_monit = $monitor->fechayhora;
            //$monitoreo->fecha_reg = $monitor->fechayhora;
            $idserv = App\Servicio::where('nombre', $monitor->nombre[1])->first();
            $monitoreo->id_serv = $idserv->id;
            $monitoreo->save();
        }
        return back()->with('mensaje', '¡Se ha registrado correctamente!');
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Incidente;
use App\Areaafectada;
use App\Servicio;
class IncidenciaController extends Controller
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
        
        $categ = App\Categoria::all();
        $servicio = App\Servicio::where('statusact', 'Activo')
                                ->orWhere('statuscomport', 'Ok')->get();
        $areas = App\Area::all();
        $listserv = App\Servicio::where('statusact', 'Activo')->orderBy('statuscomport', 'asc')
                                 ->get();
        return view('/registrarincid', compact('categ', 'areas', 'servicio', 'listserv'));
    }
    public function getCareers(Request $request)
    {
        return $request->all();
        if ($request->ajax()) {
            $careers = Servicio::where('idcateg', $request->faculty_id)->get();
            foreach ($careers as $career) {
                $careersArray[$career->id] = $career->name;
            }
            return response()->json($careersArray);
        }
    }
    public function byCategory($id){
        return Servicio::where('idcateg', $id)->get();
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
            'fechaincid' => 'required',
            'fechareporte' => 'required|after:fechaincid',
            'serv_id' => 'required',
            'reportador' => 'required',
            'accioncorr' => 'required',
            'metnotif' => 'required',
            'status' => 'required',
            'fechasolucion' => 'nullable|after:fechareporte',
            'case' => 'required'
          ]);  

        //return $request->all();
        $max = App\Incidente::all()->max('id');
        if ( $max == 0){
            $codigo = 9000;
        }
        else{
            $codigo = $max + 1;
        }
        $incicidencianueva = new Incidente();
        $incicidencianueva->id_serv = $request->serv_id;
        $incicidencianueva->id = $codigo;
        $incicidencianueva->id_responsable = auth()->user()->id;        
        $incicidencianueva->accion_correc = $request->accioncorr;
        $incicidencianueva->observacion = $request->observacion;
        $incicidencianueva->metodo_notif = $request->metnotif;
        $incicidencianueva->reportador = $request->reportador;
        $incicidencianueva->fecha_reporte = $request->fechareporte;
        $incicidencianueva->fecha_incidente = $request->fechaincid;
        $incicidencianueva->fecha_sol = $request->fechasolucion;
        $incicidencianueva->status = $request->status;
        $incicidencianueva->save();
        foreach ($request->case as $item=>$v){
            $areaafectada = new Areaafectada();
            $areaafectada->id_incident = $codigo;
            $areaafectada->id_area = $request->case[$item];
            $areaafectada->save();
        }
        $updateserv = App\Servicio::find($request->serv_id);
        $updateserv->statuscomport = $request->status;
        $updateserv->save();
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
        return Servicio::where('idcateg', $id)->get();
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

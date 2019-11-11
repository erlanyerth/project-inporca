<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
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
        $max = App\Incidente::all()->max('id');
        if ( $max == 0){
            $codigo = 9000;
        }
        else{
            $codigo = $max + 1;
        }
        $categorias = App\Categoria::all();
        $areas = App\Area::all();
        return view('/registrarincid', compact('categorias', 'areas', 'codigo'));
    }
    public function getserv(Request $request){
        if($request->ajax()) {
            $serv = Servicio::where('idcateg', $request->categ_id)
            ->get();
            foreach ($serv as $servicio){
                $servicioArray[$servicio->id] = $servicio->nombre;
            }
            return response()->json( $servicioArray);
        }
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
        //
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

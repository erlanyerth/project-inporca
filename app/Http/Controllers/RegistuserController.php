<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistuserController extends Controller
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
        //
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
            'name' => 'required|string|max:50',
            'nameuser' => 'required|string|max:10|unique:users',
            //'tipouser' => 'required|string|max:255',
            
            //'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        $status = 'Activo';
        $tipo = 'General';
        return User::create([
            'name' => $data['name'],
            'nameuser' => $data['nameuser'],
            'tipouser' => $tipo,
            'status' => $status,
           // 'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        /*$usernueva = new Users();
        $usernueva->name = $request->name;
        $usernueva->status = "Activo";

        $usernueva->save();
        return back()->with('mensaje', '¡El usuario se ha registrado correctamente!');*/
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

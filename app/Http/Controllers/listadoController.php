<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listadoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        //return view('/listadodisp');
       
    }
    public function store(Request $request)
    {
       
    }

}


<?php

namespace App\Http\Controllers;

use App\Models\Trabajador;
use Illuminate\Http\Request;

class TrabajadoresController extends Controller
{
    function index(){
        $trabajador = Trabajador::get();
        return view('trabajadores', compact('trabajador'));
    }
}

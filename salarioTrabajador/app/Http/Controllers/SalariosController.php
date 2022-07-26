<?php

namespace App\Http\Controllers;

use App\Models\Salario;
use App\Models\Trabajador;
use Illuminate\Http\Request;

class SalariosController extends Controller
{
    public function index($id){
        $trabajador = Trabajador::find($id);
        return view('salarios',[
            'trabajador' => $trabajador
        ]);
    }

    function getSalarios(){
        $salario = Salario::get();
        return view('salarios', compact('salario'));
    }

    public function storeSalarios(Request $request){
        //dd($request);
        $data = new Salario;
        $data->idTrabajador = $request["idTrabajador"];
        $data->tarifaHora = $request["tarifaHora"];
        $data->horas = $request["horasTrabajadas"];
        $data->bono = $request["bono"];
        $data->impuesto = $request["impuestos"];
        $data->salarioNeto = $request["salarioNeto"];
        $data->save();
        return view('mensaje');
    }
}

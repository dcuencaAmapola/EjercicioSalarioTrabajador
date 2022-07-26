@extends('layout')

@section('content')
<div>
    <h1>Calculo de Salario Neto</h1>
    <br />
    <ul class="list-group list-group-horizontal-xl">
        <li class="list-group-item">ID Trabajador</li>
        <li id="trabajador" class="list-group-item" value="{{$trabajador->idTrabajador}}">{{$trabajador->idTrabajador}}</li>
      </ul>
      <ul class="list-group list-group-horizontal-xl">
        <li class="list-group-item">Nombre</li>
        <li class="list-group-item" value="{{$trabajador->idTrabajador}}">{{$trabajador->nombreTrabajador}}</li>
      </ul>
      <ul class="list-group list-group-horizontal-xl">
        <li class="list-group-item">Apellido</li>
        <li class="list-group-item" value="{{$trabajador->idTrabajador}}">{{$trabajador->apellidoTrabajador}}</li>
    </ul>

    <br>
    <h5>Ingrese el numero de horas trabajadas:</h5>

        <div class="mb-3 row">
            <label for="tarifaHoraI" class="col-sm-2 col-form-label" >Tarifa por Hora</label>
            <div class="col-sm-10">
              <input name="tarifaHoraI" id="tarifaHoraI" type="text" class="form-control" placeholder="Ingrese la tarifa por hora">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="horasTrabajadasI" class="col-sm-2 col-form-label">Horas Trabajadas</label>
            <div class="col-sm-10">
              <input name="horasTrabajadasI" id="horasTrabajadasI" type="text" class="form-control" placeholder="Ingrese las horas trabajadas" required>
            </div>
        </div>
        <div>
            <br>
            <a type="button" class="btn btn-info" onclick="mostrarDatosCalculados()">Calcular</a>
            <br>
        </div>


        <br/>
        <h3>Calculo</h3>
        <form method="POST" action="{{route('salarios.storeSalarios')}}">
            @csrf

            <label for="idTrabajador" class="col-sm-2 col-form-label">Trabajador N°</label>
            <input name="idTrabajador" id="idTrabajador" type="text" readonly class="form-control-plaintext"placeholder="Trabajador">
            <label for="tarifaHora" class="col-sm-2 col-form-label">Tarifa por Hora $</label>
            <input name="tarifaHora" id="tarifaHora" type="text" readonly class="form-control-plaintext"placeholder="Tarifa por hora">
            <label for="horasTrabajadas" class="col-sm-2 col-form-label">Horas Trabajadas</label>
            <input name="horasTrabajadas" id="horasTrabajadas" type="text" readonly class="form-control-plaintext"placeholder="Horas Trabajadas" >
            <label for="bono" class="col-sm-2 col-form-label">Bono $</label>
            <input name="bono" id="bono" type="text" readonly class="form-control-plaintext"placeholder="Bono" >
            <label for="impuestos" class="col-sm-2 col-form-label">Impuestos $</label>
            <input name="impuestos" id="impuestos" type="text" readonly class="form-control-plaintext"  placeholder="Impuestos" >
            <label for="salarioNeto" class="col-sm-2 col-form-label">Salario Neto $</label>
            <input name="salarioNeto" id="salarioNeto" type="text" readonly class="form-control-plaintext"  placeholder="Salario Neto" >
            <button type="submit" class="btn btn-success">Guardar Salario Neto</button>
    </form>
</div>
<script src="{{ asset('/js/calcularSalario.js') }}"></script>

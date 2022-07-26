@extends('layout')

@section('content')

    <h1 style="align: center">Trabajadores</h1>
    <ul>
        <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @csrf
            @forelse($trabajador as $trabajadorItem)
            <tr>
                <td scope="row">{{$trabajadorItem->idTrabajador}}</td>
                <td>{{$trabajadorItem->nombreTrabajador}}</td>
                <td>{{$trabajadorItem->apellidoTrabajador}}</td>
                <td>
                    <a href="{{route ('salarios.index', $trabajadorItem->idTrabajador)}}">Salario Neto</a>
                </td>
            </tr>
            @empty
                <li>No hay Trabajadores para mostrar</li>
            @endforelse
        </tbody>
        </table>
    </ul>

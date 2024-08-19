@extends('layouts.app')

@section('title', 'Ver detalles')

@section('content')

<br>
<h3 class="text-center">Solicitudes de Prestamo</h3>
<br>
<table class="table" table-success">

    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre Completo</th>
        <th scope="col">Numero Identificacion</th>
        <th scope="col">Dirección</th>
        <th scope="col">Telefono</th>
        <th scope="col">Fecha de Solicitud</th>
        <th scope="col">Fecha de Devolución</th>
        <th scope="col">Ver Solicitud</th>
      </tr>
    </thead>

    <tbody>
        <tr>
        <th scope="row">{{$loan->id}}</th>
        <td>{{$loan->nombre_completo}}</td>
        <td>{{$loan->numero_identificacion}}</td>
        <td>{{$loan->direccion}}</td>
        <td>{{$loan->telefono}}</td>
        <td>{{$loan->fecha_solicitud}}</td>
        <td>{{$loan->fecha_devolucion}}</td>
        <td><a href="/prestamos/{{$loan->id}}/edit" class="btn btn-primary">Editar Solicitud</a></td>

      </tr>
    </tbody>
  </table>


  @endsection

@extends('layouts.app')

@section('title', 'Ver Solicitudes')

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
        @foreach ($loan as $prestamito)
      <tr>
        <th scope="row">{{$prestamito->id}}</th>
        <td>{{$prestamito->nombre_completo}}</td>
        <td>{{$prestamito->numero_identificacion}}</td>
        <td>{{$prestamito->direccion}}</td>
        <td>{{$prestamito->telefono}}</td>
        <td>{{$prestamito->fecha_solicitud}}</td>
        <td>{{$prestamito->fecha_devolucion}}</td>
        <td><a href="/prestamos/{{$prestamito->id}}" class="btn btn-primary">Ver Detalles</a></td>

      </tr>
    </tbody>
    @endforeach
  </table>


  @endsection

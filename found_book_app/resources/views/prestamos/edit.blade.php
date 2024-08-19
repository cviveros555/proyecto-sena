@extends('layouts.app')

@section('title', 'Editar Solicitud')

@section('content')
<br>
<h5><center>Editar Solicitud de Prestamo</h5></center>


<form action ="/prestamos/{{$loan->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="container">
        <div class = "row">
        <div class="col-6">
          <label for="nombrecompleto" class="form-label">Nombre Completo</label>
          <input type="text" class="form-control" id="nombre_completo" value="{{$loan->nombre_completo}}" name="nombre_completo">
        </div>
        <div class="col-6">
            <label for="numero_identificacion" class="form-label">Numero de Identificacion</label>
            <input type="text" class="form-control" id="numero_identificacion" value="{{$loan->numero_identificacion}}" name="numero_identificacion">
          </div>
        <div class="col-6">
          <label for="direccion" class="form-label">Direccion</label>
          <input type="text" class="form-control" id="direccion" value="{{$loan->direccion}}" name="direccion">
        </div>
        <div class="col-6">
          <label for="telefono" class="form-label">Telefono</label>
          <input type="number" class="form-control" id="telefono" value="{{$loan->telefono}}" name="telefono">
        </div>
        <div class="col-6">
          <label for="fecha_solicitud" class="form-label">Fecha de Solicitud</label>
          <input type="date" class="form-control" id="fecha_solicitud" value="{{$loan->fecha_solicitud}}" name="fecha_solicitud">
        </div>
        <div class="col-6">
          <label for="fecha_devolucion" class="form-label">Fecha de Devolucion</label>
          <input type="date" class="form-control" id="fecha_devolucion" value="{{$loan->fecha_devolucion}}" name="fecha_devolucion">
        </div>
        </div>
          <br>
        </div>
          <br>
        <div class="col-12">
         <center> <button type="submit" class="btn btn-success">Actualizar Solicitud</button>
        </div></center>
    </div>
      </form>


@endsection

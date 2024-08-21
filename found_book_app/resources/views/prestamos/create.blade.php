@extends('layouts.app')

@section('title', 'Crear Solicitud')

@section('content')
<br>
<h5><center>Crear Solicitud de Prestamo</h5></center>

<a class="btn btn-link" href="/prestamos" role="button">Ver Solicitudes Anteriores</a>
<br>
<br>
<form action ="/prestamos" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class = "row">
        <div class="col-6">
          <label for="nombrecompleto" class="form-label">Nombre Completo</label>
          <input type="text" class="form-control" id="nombre_completo" name="nombre_completo">
        </div>
        <div class="col-6">
            <label for="numero_identificacion" class="form-label">Numero de Identificacion</label>
            <input type="number" class="form-control" id="numero_identificacion" name="numero_identificacion">
          </div>
        <div class="col-6">
          <label for="direccion" class="form-label">Direccion</label>
          <input type="text" class="form-control" id="direccion" name="direccion">
        </div>
        <div class="col-6">
          <label for="telefono" class="form-label">Telefono</label>
          <input type="number" class="form-control" id="telefono" name="telefono">
        </div>
        <div class="col-6">
          <label for="fecha_solicitud" class="form-label">Fecha de Solicitud</label>
          <input type="date" class="form-control" id="fecha_solicitud" name="fecha_solicitud">
        </div>
        <div class="col-6">
          <label for="fecha_devolucion" class="form-label">Fecha de Devolucion</label>
          <input type="date" class="form-control" id="fecha_devolucion" name="fecha_devolucion">
        </div>
        </div>
          <br>
        </div>
          <br>
            <!-- Button trigger modal -->
<center><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Solicitud Completa
  </button></center>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">¿Esta Seguro?</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ¡¡Le recomendamos verificar que sus datos esten bien escritos antes de continuar, de lo contrario de clic en Enviar Solicitud!!
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Verificar</button>
          <button type="submit" class="btn btn-success">Enviar Solicitud</button>
        </div>
      </div>
    </div>
  </div>
    </div>
      </form>


@endsection

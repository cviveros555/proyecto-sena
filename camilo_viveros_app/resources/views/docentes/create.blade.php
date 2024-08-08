@extends('layouts.app')

@section('title', 'Crear docente')

@section('content')
<br>
<h5><center>Crear Docente</h5></center>
<br>
<form action ="/docentes" method="POST">
    @csrf
    <div class="container">
        <div class = "row">
        <div class="col-md-6">
          <label for="nombredocente" class="form-label">Nombres</label>
          <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="col-md-6">
            <label for="apellidodocente" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="apellido" name="apellido">
          </div>
        <div class="col-4">
          <label for="numero_documento" class="form-label">Numero de Documento</label>
          <input type="number" class="form-control" id="numero_documento" name="numero_documento">
        </div>
        <div class="col-4">
          <label for="numerocelular" class="form-label">Numero Celular</label>
          <input type="number" class="form-control" id="numero_celular" name="numero_celular">
        </div>
        <div class="col-4">
          <label for="ciudad" class="form-label">Ciudad</label>
          <input type="text" class="form-control" id="ciudad" name="ciudad">
        </div>
        <div class="col-md-6">
          <label for="direccion" class="form-label">Direccion de Residencia</label>
          <input type="text" class="form-control" id="direccion" name="direccion">
        </div>
        <div class="col-md-6">
            <label for="correo" class="form-label">Correo Electronico</label>
            <input type="text" class="form-control" id="correo_electronico" name="correo_electronico">
          </div>
            </label>
          </div>
        <br>
        <div class="col-12">
          <button type="submit" class="btn btn-success">Crear</button>
        </div>
    </div>
      </form>


@endsection

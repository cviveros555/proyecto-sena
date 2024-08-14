@extends('layouts.app')

@section('title', 'Editar perfil')

@section('content')
<br>
<h3 class="text-center">Editar Perfil</h3>
<form action ="/docentes/{{$docent->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="container">
        <div class = "row">
        <div class="col-6">
          <label for="nombredocente" class="form-label">Modifique el nombre del docente</label>
          <input name="nombre" class="form-control" id="nombredocente" value="{{$docent->nombre}}" type="text">
        </div>
        <div class="col-6">
            <label for="apellidodocente" class="form-label">Modifique los apellidos del docente</label>
            <input name="apellido" class="form-control" id="apellido" value="{{$docent->apellido}}" type="text">
          </div>
        <div class="col-4">
          <label for="numero_documento" class="form-label">Modifique el numero de documento</label>
          <input name="numero_documento" class="form-control" id="numero_documento" value="{{$docent->numero_documento}}" type="text">
        </div>
        <div class="col-4">
          <label for="numerocelular" class="form-label">Modifique el numero celular</label>
          <input name="numero_celular" class="form-control" id="numerocelular" value="{{$docent->numero_celular}}" type="text">
        </div>
        <div class="col-4">
          <label for="ciudad" class="form-label">Modifique la ciudad</label>
          <input name="ciudad" class="form-control" id="ciudad" value="{{$docent->ciudad}}" type="text">
        </div>
        <div class="col-6">
          <label for="direccion" class="form-label">Modifique la direccion de residencia</label>
          <input name="direccion" class="form-control" id="direccion" value="{{$docent->direccion}}" type="text">
        </div>
        <div class="col-6">
            <label for="correo" class="form-label">Modifique el correo electronico</label>
            <input name="correo_electronico" class="form-control" id="correo" value="{{$docent->correo_electronico}}" type="text">
        </div>
        </div>
          <br>
        <div class="col-6">
            <label for="imagen" class="form-label">Cambiar foto de perfil</label>
            <br>
            <input id="imagen" type="file" name="imagen">
        </div>
        </div>
          <br>
        <div class="col-12">
         <center> <button type="submit" class="btn btn-success">Guardar</button>
        </div></center>
    </div>
      </form>
@endsection

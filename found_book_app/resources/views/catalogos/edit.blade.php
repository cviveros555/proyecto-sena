@extends('layouts.app')

@section('title', 'Editar libro')

@section('content')
<br>
<h3 class="text-center">Editar Libro</h3>
<form action ="/catalogos/{{$catalg->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="container">
        <div class = "row">
        <div class="col-6">
          <label for="nombrelibro" class="form-label">Modifique el nombre del libro</label>
          <input name="nombre_libro" class="form-control" id="nombrelibro" value="{{$catalg->nombre_libro}}" type="text">
        </div>
        <div class="col-6">
            <label for="autor" class="form-label">Modifique el autor</label>
            <input name="autor" class="form-control" id="autor" value="{{$catalg->autor}}" type="text">
          </div>
        <div class="col-4">
          <label for="editorial" class="form-label">Modifique la editorial</label>
          <input name="editorial" class="form-control" id="editorial" value="{{$catalg->editorial}}" type="text">
        </div>
        <div class="col-4">
          <label for="existencia" class="form-label">Modifique la cantidad en existencia</label>
          <input name="existencia" class="form-control" id="existencia" value="{{$catalg->existencia}}" type="text">
        </div>
        <div class="col-4">
          <label for="genero" class="form-label">Modifique el genero</label>
          <input name="genero" class="form-control" id="genero" value="{{$catalg->genero}}" type="text">
        </div>
        <div class="col-6">
          <label for="descripcion" class="form-label">Modifique la descripcion</label>
          <input name="descripcion" class="form-control" id="descripcion" value="{{$catalg->descripcion}}" type="text">
        </div>
        </div>
          <br>
        <div class="col-6">
            <label for="imagen" class="form-label">Cambiar logo del Libro</label>
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

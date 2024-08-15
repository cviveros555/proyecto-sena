@extends('layouts.app')

@section('title', 'Crear Catalogo')

@section('content')
<br>
<h5><center>Crear Libro</h5></center>
<br>
<form action ="/catalogos" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class = "row">
        <div class="col-6">
          <label for="nombrelibro" class="form-label">Nombre del Libro</label>
          <input type="text" class="form-control" id="nombrelibro" name="nombre_libro">
        </div>
        <div class="col-6">
            <label for="autor" class="form-label">Autor</label>
            <input type="text" class="form-control" id="autor" name="autor">
          </div>
        <div class="col-4">
          <label for="editorial" class="form-label">Editorial</label>
          <input type="text" class="form-control" id="editorial" name="editorial">
        </div>
        <div class="col-4">
          <label for="existencia" class="form-label">Cantidad Existencia</label>
          <input type="number" class="form-control" id="existencia" name="existencia">
        </div>
        <div class="col-4">
          <label for="genero" class="form-label">Genero</label>
          <input type="text" class="form-control" id="genero" name="genero">
        </div>
        <div class="col-12">
          <label for="descripcion" class="form-label">Descripcion</label>
          <input type="text" class="form-control" id="descripcion" name="descripcion">
        </div>
        </div>
          <br>
        <div class="col-6">
            <label for="imagen" class="form-label">Cargar Logo del Libro</label>
            <br>
            <input id="imagen" type="file" name="imagen">
        </div>
        </div>
          <br>
        <div class="col-12">
         <center> <button type="submit" class="btn btn-success">Crear Libro</button>
        </div></center>
    </div>
      </form>


@endsection

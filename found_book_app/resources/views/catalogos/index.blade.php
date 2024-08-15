@extends('layouts.app')

@section('title', 'Catalogos')

@section('content')

<br>
<h3 class="text-center">Listado de Libros</h3>
<br>
<div class="row">
@foreach ($catalg as $catalogue)
<div class="col-sm">
    <div class="card" style="width: 18rem;">
        <img style="height:200px; width:250px; margin:20px" src="{{ Storage::url($catalogue->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
        <div class="card-body">
          <center><h5 class="card-title">{{$catalogue->nombre_libro}}</h5>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">{{$catalogue->autor}}</li>
            <li class="list-group-item">{{$catalogue->editorial}}</li>
            <li class="list-group-item">{{$catalogue->existencia}}</li>
            <li class="list-group-item">{{$catalogue->genero}}</li>
            <li class="list-group-item">{{$catalogue->descripcion}}</li>
          </ul>
          <a href="/catalogos/{{$catalogue->id}}" class="btn btn-primary">Ver Detalles</a>
      </div>
</div>



@endforeach

@endsection

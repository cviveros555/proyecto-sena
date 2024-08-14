@extends('layouts.app')

@section('title', 'Crear docente')

@section('content')

<br>
<h3 class="text-center">Listado de Docentes</h3>
<br>
<div class="row">
@foreach ($docent as $mister)
<div class="col-sm">
    <div class="card" style="width: 18rem;">
        <img style="height:200px; width:250px; margin:20px" src="{{ Storage::url($mister->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
        <div class="card-body">
          <center><h5 class="card-title">{{$mister->nombre}}</h5>
          <h5 class="card-title">{{$mister->apellido}}</h5></center>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">{{$mister->correo_electronico}}</li>
            <li class="list-group-item">{{$mister->numero_celular}}</li>
            <li class="list-group-item">{{$mister->ciudad}}</li>
            <li class="list-group-item">{{$mister->direccion}}</li>
          </ul>
          <a href="/docentes/{{$mister->id}}" class="btn btn-primary">Ver Perfil</a>
      </div>
</div>



@endforeach

@endsection

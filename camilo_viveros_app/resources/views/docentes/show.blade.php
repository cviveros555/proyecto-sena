@extends('layouts.app')

@section('title', 'Ver Perfil')

@section('content')


<div class="text-center">
        <img style="height:200px; width:250px; margin:20px" src="{{ Storage::url($docent->imagen) }}"
        <div class="card-body">
          <h5 class="card-title">{{$docent->nombre}}</h5>
          <h5 class="card-title">{{$docent->apellido}}</h5>
          </div>
          <center><ul class="list-group list-group-flush">
            <li class="list-group-item">{{$docent->correo_electronico}}</li>
            <li class="list-group-item">{{$docent->numero_celular}}</li>
            <li class="list-group-item">{{$docent->ciudad}}</li>
            <li class="list-group-item">{{$docent->direccion}}</li>
          </ul>
          <br>
          <a href="/docentes/{{$docent->id}}/edit" class="btn btn-warning">Editar Perfil</a>
          </center></div>

      @endsection

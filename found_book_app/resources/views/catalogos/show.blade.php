@extends('layouts.app')

@section('title', 'Ver detatalles')

@section('content')


<div class="text-center">
        <img style="height:200px; width:250px; margin:20px" src="{{ Storage::url($catalg->imagen) }}"
        <div class="card-body">
          <h5 class="card-title">{{$catalg->nombre_libro}}</h5>
          </div>
          <center><ul class="list-group list-group-flush">
            <li class="list-group-item">{{$catalg->autor}}</li>
            <li class="list-group-item">{{$catalg->editorial}}</li>
            <li class="list-group-item">{{$catalg->existencia}}</li>
            <li class="list-group-item">{{$catalg->genero}}</li>
            <br>
            <li class="list-group-item">{{$catalg->descripcion}}</li>
          </ul>
          <br>
          <a href="/catalogos/{{$catalg->id}}/edit" class="btn btn-warning">Editar Libro</a>
          </div></center>

      @endsection

@extends('plantilla')

@section('titulo')
Proyectos | Crear un proyecto
@endsection

@section('contenido')
<div>
    <h1 class="texto-c">Creando un proyecto</h1>
    <form method="POST" action="{{route('proyectos.store')}}">
        @include('parciales/proyectos/proyectoTomarDatos')
    </form>
</div>
@endsection

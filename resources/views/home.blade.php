@extends('plantilla')

@section('titulo', 'Home')

@section('contenido')
<div>
    <h1 class="texto-c">Home</h1>
    <br/>
    @auth
    <h2 class="fondo-alice texto-c">
        {{'Bienvenido: '.auth()->user()->name.'.'}}
    </h2>
    @else
    <h2 class="fondo-alice texto-c">
        {{'Bienvenido: '.($nombre ?? 'ivitado').'.'}}
    </h2>
    @endauth
</div>
@endsection

@extends('plantilla')

@section('titulo', 'Home')

@section('contenido')
    <h1>Home</h1>
    Bienvenido {{$nombre ?? "Invitado"}}.
@endsection

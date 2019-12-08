@extends('plantilla')

@section('titulo')
Proyectos | {{$proyecto->titulo}}
<!-- Dudo de la utilidad de usar acentos en los campos de la BD -->
@endsection

@section('contenido')
<div>
    <h1 class="texto-c">Datos de {{$proyecto->titulo}}</h1>
    <?php
        $vacio='Proyecto vacío.';
        $proyecto=json_decode($proyecto, true); // Pasar JSON a Array.
    ?>
    @isset($proyecto)
    <div class="centraTabla">
        <table class="tabla texto-c">
            <thead>
                <tr>
                    @forelse ($proyecto as $atributo => $valor)
                    <th class="celda">
                        {{$atributo}}
                    </th>
                    @empty
                    <th class="celda">
                        {{$vacio}}
                    </th>
                    @endforelse
                </tr>
            </thead>
            <tbody>
                <tr>
                    @forelse ($proyecto as $valor)
                    <td class="celda">
                        {{$valor}}
                    </td>
                    @empty
                    <td class="celda">
                        {{$vacio}}
                    </td>
                    @endforelse
                </tr>
            </tbody>
            <tfoot>

            </tfoot>
        </table>
    </div>
    @else
    <h2 class="texto-c">
        {{$vacio}}
    </h2>
    @endisset
</div>
@endsection

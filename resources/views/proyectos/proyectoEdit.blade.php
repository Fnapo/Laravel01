@extends('plantilla')

@section('titulo')
Proyectos | Editar un proyecto
@endsection

@section('contenido')
<div>
    <h1 class="texto-c">Editando un proyecto</h1>
    <form method="POST" action="{{route('proyectos.update', $proyecto->id)}}">
        @csrf
        @method('PATCH')
        <!-- Crea un campo oculto con el method PUTCH -->
        <div class="centraTabla">
            <table class="tabla-i-b">
                <thead></thead>
                <tbody>
                    <tr class="alto2 margen-r">
                        <td>
                            <label class="ancho10 texto-c fondo-alice">Título:</label>
                        </td>
                        <td>
                            <input class="input-15 fondo-v" type="text" name="titulo" value="{{$proyecto['titulo']}}"
                                placeholder="Título del proyecto ...">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="texto-c color-r">
                            <label>{{$errors->first('titulo')}}</label>
                        </td>
                    </tr>
                    <tr class="alto3 margen-r">
                        <td>
                            <label class="ancho10 texto-c fondo-alice">Descripción:</label>
                        </td>
                        <td>
                            <textarea class="input-15 fondo-v margen alineado-v" name="descripcion"
                                placeholder="Descripción del proyecto ...">{{$proyecto['descripcion']}}</textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="texto-c color-r">
                            <label>{{$errors->first('descripcion')}}</label>
                        </td>
                    </tr>
                    <tr class="alto3">
                        <td colspan="2" class="texto-c texto-20">
                            {{'Estos datos se guardarán en una BD.'}}
                        </td>
                    </tr>
                </tbody>
                <tfoot></tfoot>
            </table>
        </div>
        <div class="centraTabla">
            <table class="tabla-i-b">
                <thead></thead>
                <tbody class="texto-c">
                    <tr>
                        <td>
                            <input type="submit" class="boton-15" type="submit">
                        </td>
                        <td>
                            <input type="reset" class="boton-15" type="reset">
                        </td>
                    </tr>
                </tbody>
                <tfoot></tfoot>
            </table>
        </div>
    </form>
</div>
@endsection

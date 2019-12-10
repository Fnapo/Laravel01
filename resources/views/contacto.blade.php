@extends('plantilla')

@section('titulo', 'Contact')

@section('contenido')
<!-- Para indentar -->
<div>
    <h1>Contact</h1>
    <!-- Para soporat method="post" necesito un nuevo controlador.
        Como recibe el form necesito el método store -->
    <form method="post" action="{{route('contacto.store')}}">
        @csrf
        <!-- Protección del form -->
        <table>
            <thead></thead>
            <tbody>
                <tr class="alto2 margen-r">
                    <td>
                        <label class="ancho10 texto-c fondo-alice">Nombre:</label>
                    </td>
                    <td>
                        <input class="ancho-15 fondo-v" type="text" name="nombre" value="{{old('nombre')}}"
                            placeholder="Tu nombre ...">
                    </td>
                    <td>
                        <label class="ancho10 texto-c fondo-alice">email:</label>
                    </td>
                    <td>
                        <input class="ancho-15 fondo-v" type="email" name="email" value="{{old('email')}}"
                            placeholder="Tu email ...">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="texto-c color-r">
                        <label>{{$errors->first('nombre')}}</label>
                    </td>
                    <td colspan="2" class="texto-c color-r">
                        <label>{{$errors->first('email')}}</label>
                    </td>
                </tr>
                <tr class="alto3 margen-r">
                    <td>
                        <label class="ancho10 texto-c fondo-alice">Asunto:</label>
                    </td>
                    <td>
                        <input class="ancho-15 fondo-v" type="text" name="asunto" value="{{old('asunto')}}"
                            placeholder="Asunto del correo ...">
                    </td>
                    <td>
                        <label class="ancho10 texto-c fondo-alice alineado-v">Mensaje:</label>
                    </td>
                    <td>
                        <textarea class="ancho-15 fondo-v margen alineado-v" name="mensaje"
                            placeholder="Tu mensaje ...">{{old('mensaje')}}</textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="texto-c color-r">
                        <label>{{$errors->first('asunto')}}</label>
                    </td>
                    <td colspan="2" class="texto-c color-r">
                        <label>{{$errors->first('mensaje')}}</label>
                    </td>
                </tr>
                <tr class="alto3">
                    <td colspan="4" class="texto-c texto-20">
                        {{'Tus datos no se publicarán'}}
                    </td>
                </tr>
            </tbody>
            <tfoot class="texto-c">
                <tr>
                    <td colspan="2">
                        <input type="submit" class="ancho-15 boton-normal" type="submit">
                    </td>
                    <td colspan="2">
                        <input type="reset" class="ancho-15 boton-normal" type="reset">
                    </td>
                </tr>
            </tfoot>
        </table>
        <!--
    <p class="alto2">
        <label class="ancho10 texto-c fondo-alice">Nombre:</label>
        <input class="ancho-15 fondo-v" type="text" name="nombre"
             placeholder="Tu nombre ..."><br />
        <label class=""></label>
    </p>
    <p class="alto2">
        <label class="ancho10 texto-c fondo-alice">email:</label>
        <input class="ancho-15 fondo-v" type="email" name="email" placeholder="Tu email ...">
    </p>
    <p class="alto2">
        <label class="ancho10 texto-c fondo-alice">Asunto:</label>
        <input class="ancho-15 fondo-v" type="text" name="asunto"
             placeholder="Asunto del correo ...">
    </p>
    <p class="alto3">
        <label class="ancho10 texto-c fondo-alice alineado-v">Mensaje:</label>
        <textarea class="ancho-15 fondo-v margen alineado-v" name="mensaje" "
            placeholder="Tu mensaje ..."></textarea>

    </p>
    <p class="alto2">
        <input type="submit" class="ancho-15 fondo-v" type="submit">
        <input type="reset" class="ancho-15 fondo-v" type="reset">
    </p>
    -->
    </form>
</div>
@endsection

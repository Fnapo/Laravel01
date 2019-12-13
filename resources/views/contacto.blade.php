@extends('plantilla')

@section('titulo', 'Contact')

@section('contenido')
<!-- Para indentar -->
<div>
    <h1 class="texto-c">Contact</h1>
    <br/>
    <!-- Para soporat method="post" necesito un nuevo controlador.
        Como recibe el form necesito el método store -->
    <form method="post" action="{{route('contacto.store')}}">
        @csrf
        <!-- Protección del form -->
        <div class="centraTabla">
            <table class="tabla-i-b">
                <thead></thead>
                <tbody>
                    <tr class="alto-2 margen-r">
                        <td>
                            <label class="ancho-10 texto-c fondo-alice fuente-20-bold">Nombre:</label>
                        </td>
                        <td>
                            <input class="ancho-15 fondo-v fuente-20" type="text" name="nombre"
                                value="{{old('nombre')}}" placeholder="Tu nombre ...">
                        </td>
                        <td>
                            <label class="ancho-10 texto-c fondo-alice fuente-20-bold">email:</label>
                        </td>
                        <td>
                            <input class="ancho-15 fondo-v fuente-20" type="email" name="email" value="{{old('email')}}"
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
                    <tr class="alto-3 margen-r">
                        <td>
                            <label class="ancho-10 texto-c fondo-alice fuente-20-bold">Asunto:</label>
                        </td>
                        <td>
                            <input class="ancho-15 fondo-v fuente-20" type="text" name="asunto"
                                value="{{old('asunto')}}" placeholder="Asunto del correo ...">
                        </td>
                        <td>
                            <label class="ancho-10 texto-c fondo-alice alineado-v fuente-20-bold">Mensaje:</label>
                        </td>
                        <td>
                            <textarea class="ancho-15 fondo-v alineado-v fuente-20" name="mensaje"
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
                    <tr class="alto-3">
                        <td colspan="4" class="texto-c fuente-20-bold">
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
        </div>
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

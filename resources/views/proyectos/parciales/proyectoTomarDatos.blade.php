@csrf
<div class="centraTabla">
    <table class="tabla-i-b">
        <thead></thead>
        <tbody>
            <tr class="alto-2 margen-r">
                <td>
                    <label class="ancho-10 texto-c fondo-alice">Título:</label>
                </td>
                <td>
                    <input class="ancho-15 fondo-v" type="text" name="titulo"
                        value="{{old('titulo', $proyecto['titulo'])}}" placeholder="Título del proyecto ...">
                </td>
            </tr>
            <tr>
                <td colspan="2" class="texto-c color-r">
                    <label>{{$errors->first('titulo')}}</label>
                </td>
            </tr>
            <tr class="alto-3 margen-r">
                <td>
                    <label class="ancho-10 texto-c fondo-alice">Descripción:</label>
                </td>
                <td>
                    <textarea class="ancho-15 fondo-v margen alineado-v" name="descripcion"
                        title="Descripción del proyecto ...">{{old('descripcion', $proyecto['descripcion'])}}
                    </textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="texto-c color-r">
                    <label>{{$errors->first('descripcion')}}</label>
                </td>
            </tr>
            <tr class="alto-3">
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
                    <input class="ancho-15 boton-normal" type="submit">
                </td>
                <td>
                    <input class="ancho-15 boton-normal" type="reset">
                </td>
            </tr>
        </tbody>
        <tfoot></tfoot>
    </table>
</div>

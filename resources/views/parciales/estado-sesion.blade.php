@if(session('estado'))
<h2 class="texto-c fondo-alice">
    {{'Acción de la sesión: '.session('estado')}}
</h2>
@endif

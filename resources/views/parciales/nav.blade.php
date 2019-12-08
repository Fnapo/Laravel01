<!-- Vista parcial con la navegación -->

<nav>
    <ul>
        <!-- Cambia como obtener el nombre de la ruta actual, se hace con \Route::current()->getName()
        o \Route::currentRouteName()
        Route esta definida en \vendor\laravel\...\Route.php como hija de la clase static Facade -->
        <li> <a href="{{route('home')}}" class="{{desActivar('home')}}">Home</a> </li>
        <li> <a href="{{route('about')}}" class="{{desActivar('about')}}">About</a> </li>
        <li> <a href="{{route('proyectos.index')}}" class="{{desActivar('proyectos.index')}}">Proyectos</a>
        </li>
        <li> <a href="{{route('contacto')}}" class="{{desActivar('contacto')}}">Contacto</a> </li>
    </ul>
</nav>

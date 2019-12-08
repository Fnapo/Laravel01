<!DOCTYPE html>

<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Uso de los .css o simplemente'/css/nombre.css' -->
        <link href=@yield('css', asset('/css/plantilla.css')) rel="stylesheet" type="text/css">
        <title>@yield('titulo', "Laravel")</title>
    </head>

    <body>
        <!-- Cambia como obtener el nombre de la ruta actual, se hace con \Route::current()->getName()
        o \Route::currentRouteName()
        Route esta definida en \vendor\laravel\...\Route.php como hija de la clase static Facade -->
        @include('./parciales/nav')
        <!-- También vale ('parciales/nav'), con ./ te ayuda en la navegación, pero siempre sin .blade.php -->
        @yield('contenido')
    </body>

</html>

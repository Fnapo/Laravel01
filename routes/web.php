<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

App::setlocale('es'); // Para avisos en castellano.

/*
Comentada para usar las rutas creadas propias.
Route::get('/', function () {
return view('welcome');
})->name('inicio');
 */

/*
Existen también routas:
post -> para formularios ...
put ->
patch ->
delete ->

Si queremos pasar parámetros (o variables).
Route::get(/saludo/{nombre}), function($nombre) {

};
 */
/*
Si quiero que se responda a laravel.test/users/ creo la ruta siguiente.

Route::get('/users', function () {
$nombres = ['Jorge', 'Luis', 'Pedro', 'Juan'];
$apellidos = ['Luz Luna']; // Variables PHP.

return view('propia', compact('nombres', 'apellidos')); // Variables HTML.
})->name('usuarios');

Llamada por nombre:
route('usuarios')
 */

// Route::view('/', 'propia', ['nombres' => $nombre]); No le veo sentido si hay parámetros, mejor con un controlador.
// Route::view('/', 'welcome')->name('inicio'); // Así sí.

// Rutas creadas para el tutorial.
Route::view('/', 'home', ['nombre' => 'Paco'])->name('home');
Route::view('/about', 'about')->name('about');
// Route::view('/portafolios', 'portafolio')->name('portafolios'); // ¿Singular o Plural en el nombre del resource?
// Parece que también funciona Route::view('URI', 'viewName'), pero con los parámetros cambiados Route::view('viewName', 'URI'),
// no veo otra explicación para que se active un link en el primer parámetro y no en el segundo. Es una ilusión, no funcina ... la prueba
// al usarlo con home ... 'home', '/' da un error de vista no encontrada.
Route::view('/contacto', 'contacto')->name('contacto');

/*
Usando controladores.
Route::get('/potafolios', 'PortafoliosController')->name('portafolios');
O mejor ...
Route::resource('portafolios', 'PortafoliosController'); // De nuevo ¿Singular o Plural en el nombre del resource?
Parece mejor plural pues utiliza el método index.
Pues crea todas las rutas asociadas al PortafoliosController.
Como de momento sólo utilizo el método index (mostrar todos los proyectos) ...
Al final usaré todos, por eso elimino el ->only('index');
 */
Route::resource('proyectos', 'ProyectoController'); // El nombre del controlador en singular.

/*
Para tratar (validar) el form creo un nuevo controlador. De momento sólo con store.
 */
Route::resource('contacto', 'ContactoController')->only('store');

// Las siguiente rutas son creadas para/por la autentificación.
Auth::routes(['register' => false]);

// Route::get('/home', 'HomeController@index')->name('home'); // Esta se puede ignorar. No es necesario borrar el controller asociado,
// pero sí modificar los controllers login y register con: $redirecTo='/';
// con 'register' => false se impide el acceso a ciertas rutas sin estar autentificado.

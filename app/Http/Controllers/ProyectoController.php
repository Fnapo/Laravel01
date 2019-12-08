<?php

namespace App\Http\Controllers;

use App\Modelos\Proyecto;
use Illuminate\Http\Request;

//Use DB;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $proyectos = DB::table('proyectos')->get();
        // Usar Use DB o \DB:: .....
        // Mejor con Eloquent ...
        // $proyectos = Proyecto::get(); // No se puede paginar por no ser un Objeto de una BD, es una Colletion.
        // $proyectos = Proyecto::orderBy('id')->get(); // Es un Builder y se puede paginar, necesita una función tipo get(),
        // por sí solo está vacío.
        // $xproyectos = Proyecto::orderBy('id')->paginate(); // $proyectos sin definir.
        // $proyectos = Proyecto::where('id', '<', 0)->paginate(); // Vacío.
        $proyectos = Proyecto::orderBy('id')->paginate(); // Paginación, por defecto 15. No funciona tras un get(), pero sí tras un Builder.

        return view('proyectos/proyectoIndex', compact('proyectos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('proyectos/proyectoCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contenido = $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required|min:5',
        ]);

        /*
        Proyecto::create([
        'titulo' => $request->get('titulo'),
        'descripcion' => $request->get('descripcion'),
        ]);
         */
        // Id es automático, y el resto también.
        // Como los campos y las variables coinciden podemos usar ...
        // Proyecto::create($request->all()); // Puede existir problemas de modificación no permitida. Por ello
        // lo mejor es usar una variable en el validate. Y ayuda al mantenimiento de la app,
        // pero quitando $fillable y escribiendo $guarded = []; pero todos los campos llenables deben estar en validate().
        // Aunque sea como 'nombre' => ''
        Proyecto::create($contenido);

        return redirect()->route('proyectos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyecto = Proyecto::findOrFail($id);

        // return $proyecto; // Mostrar tipo json bonito.
        return view('proyectos/proyectoShow', compact('proyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

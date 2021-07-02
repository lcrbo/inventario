<?php

namespace App\Http\Controllers;

use App\Models\Estadostock;
use App\Models\Activo;
use App\Models\Historialmovimiento;
use App\Models\Producto;
use App\Models\Ubicacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class ActivoController
 * @package App\Http\Controllers
 */
class ActivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activos = Activo::paginate();

        return view('activo.index', compact('activos'))
            ->with('i', (request()->input('page', 1) - 1) * $activos->perPage());
    }

    public function indexR()
    {
        $activos = Activo::where('estado_id','=', 1)
                        ->paginate();

        return view('reportes.index', compact('activos'))
            ->with('i', (request()->input('page', 1) - 1) * $activos->perPage());
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $activo = new Activo();
        $data =  array();
        $data['productos'] = Producto::all();
        $data['ubicacions'] = Ubicacion::all();
        $data['estadostocks'] = Estadostock::all();
     
        return view('activo.create', compact('activo'), compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Activo::$rules);

        $activo = Activo::create($request->all());

         /* dd($activo);  */
        $historia = new Historialmovimiento();
        $historia->activo_id = $activo->id;
        $historia->tipomovimiento = 1; /* ingreso activo */
        $historia->ubicacion_origen_id = $request->ubicacion_id;
        $historia->ubicacion_destino_id = $request->ubicacion_id;
        $historia->stock = $request->stock;
        $historia->estado_stock_id = $request->estado_id;
        $historia->observacion = $request->obsevacion;
        $historia->user_id = Auth::id();
        $historia->save();

        return redirect()->route('activos.index')
            ->with('success', 'Activo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $activo = Activo::find($id);

        return view('activo.show', compact('activo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $activo = Activo::find($id);
       
        $estadostocks = Estadostock::all();
        return view('activo.edit', compact('activo'),compact('estadostocks'));
    }

    public function stock($id)
    {
        $activo = Activo::find($id);
       
        
        return view('activo.edit', compact('activo'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Activo $activo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activo $activo)
    {
        /* request()->validate(Activo::$rules);  */
        
        $activo->update($request->all());

        $historia = new Historialmovimiento();
        $historia->activo_id = $activo->id;
        $historia->tipomovimiento = 2; /* update activo */
        $historia->ubicacion_origen_id = $activo->ubicacion_id;
        $historia->ubicacion_destino_id = $activo->ubicacion_id;
        $historia->stock = $activo->stock;
        $historia->estado_stock_id = $activo->estado_id;
        $historia->observacion = $activo->obsevacion;
        $historia->user_id = Auth::id();
        $historia->save();
        
        return redirect()->route('activos.index')
            ->with('success', 'Activo updated successfully'); 
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $activo = Activo::find($id)->delete();

        return redirect()->route('activos.index')
            ->with('success', 'Activo deleted successfully');
    }
}

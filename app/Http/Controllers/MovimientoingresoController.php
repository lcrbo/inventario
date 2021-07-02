<?php

namespace App\Http\Controllers;

use App\Models\Activo;
use App\Models\Estadostock;
use App\Models\Historialmovimiento;
use App\Models\Movimientoingreso;
use App\Models\Producto;
use App\Models\Proveedore;
use App\Models\Tipodocumento;
use App\Models\Ubicacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class MovimientoingresoController
 * @package App\Http\Controllers
 */
class MovimientoingresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movimientoingresos = Movimientoingreso::orderby('updated_at','ASC')
                            ->where('estado_stock_id','=', '3')
                            ->paginate();

        return view('movimientoingreso.index', compact('movimientoingresos'))
            ->with('i', (request()->input('page', 1) - 1) * $movimientoingresos->perPage());
    }

    public function indexC()
    {
        $movimientoingresos = Movimientoingreso::orderby('updated_at','ASC')
                            ->where('estado_stock_id','=', '3')
                            ->paginate();
        
        return view('conversion.index', compact('movimientoingresos'))
            ->with('i', (request()->input('page', 1) - 1) * $movimientoingresos->perPage());
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $movimientoingreso = new Movimientoingreso();
        $data =  array();
        $data['productos'] = Producto::all();
        $data['ubicacions'] = Ubicacion::all();
        $data['estadostocks'] = Estadostock::all();
        $data['proveedores'] = Proveedore::all();
        $data['tipodocumentos'] = Tipodocumento::all();

        return view('movimientoingreso.create', compact('movimientoingreso'), compact('data'));
    }

    public function createusado()
    {
        $movimientoingreso = new Movimientoingreso();
        $data =  array();
        $data['productos'] = Producto::all();
        $data['ubicacions'] = Ubicacion::all();
        $data['estadostocks'] = Estadostock::all();
        $data['proveedores'] = Proveedore::all();
        $data['tipodocumentos'] = Tipodocumento::all();

        return view('movimientoingreso.createusado', compact('movimientoingreso'), compact('data'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Movimientoingreso::$rules);
        $request->request->add(['nuevo' => 1]);
        $request->request->add(['user_id' => Auth::id()]);

       

        $activo = new Activo();
        $activo->serie = $request->serie;
        $activo->codigoactivo = $request->codigoactivo;
        $activo->obsevacion = $request->observacion;
        $activo->stock = $request->stock;
        $activo->estado_id = $request->estado_stock_id;
        $activo->producto_id = $request->producto_id;
        $activo->ubicacion_id = $request->ubicacion_id;
        $activo->save();

        $request->request->add(['activo_id' =>  $activo->id]);
        $movimientoingreso = Movimientoingreso::create($request->all());
        

        $historia = new Historialmovimiento();
        $historia->activo_id = $activo->id;
        $historia->tipomovimiento = 1; /* ingreso activo */
        $historia->ubicacion_origen_id = $activo->ubicacion_id;
        $historia->ubicacion_destino_id = $activo->ubicacion_id;
        $historia->stock = $activo->stock;
        $historia->estado_stock_id = $activo->estado_id;
        $historia->observacion = $activo->obsevacion;
        $historia->user_id = Auth::id();
        $historia->save();

        return redirect()->route('movimientoingresos.create')
            ->with('success', 'Movimientoingreso Creado correctamente.');
    }

    public function storeusado(Request $request)
    {
        request()->validate(Movimientoingreso::$rules);
        $request->request->add(['nuevo' => 2]);
        $request->request->add(['user_id' => Auth::id()]);

       
        

        $activo = new Activo();
        $activo->serie = $request->serie;
        $activo->codigoactivo = $request->codigoactivo;
        $activo->obsevacion = $request->observacion;
        $activo->stock = $request->stock;
        $activo->estado_id = $request->estado_stock_id;
        $activo->producto_id = $request->producto_id;
        $activo->ubicacion_id = $request->ubicacion_id;
        $activo->save();

        $request->request->add(['activo_id' =>  $activo->id]);
        $movimientoingreso = Movimientoingreso::create($request->all());

        $historia = new Historialmovimiento();
        $historia->activo_id = $activo->id;
        $historia->tipomovimiento = 1; /* ingreso activo */
        $historia->ubicacion_origen_id = $activo->ubicacion_id;
        $historia->ubicacion_destino_id = $activo->ubicacion_id;
        $historia->stock = $activo->stock;
        $historia->estado_stock_id = $activo->estado_id;
        $historia->observacion = $activo->obsevacion;
        $historia->user_id = Auth::id();
        $historia->save();

        return redirect()->route('movimientoingresos.createusado')
            ->with('success', 'Movimientoingreso Creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movimientoingreso = Movimientoingreso::find($id);

        return view('movimientoingreso.show', compact('movimientoingreso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movimientoingreso = Movimientoingreso::find($id);
        $estadostocks = Estadostock::all();
        return view('movimientoingreso.edit', compact('movimientoingreso'),compact('estadostocks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Movimientoingreso $movimientoingreso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movimientoingreso $movimientoingreso)
    {
         /* request()->validate(Movimientoingreso::$rules);  */
        
        $movimientoingreso->update($request->all());

        $activo = Activo::find($movimientoingreso->activo_id);
        $activo->estado_id = $request->estado_stock_id;
        $activo->save(); 

        $historia = new Historialmovimiento();
        $historia->activo_id = $activo->id;
        $historia->tipomovimiento = 2; 
        $historia->ubicacion_origen_id = $activo->ubicacion_id;
        $historia->ubicacion_destino_id = $activo->ubicacion_id;
        $historia->stock = $activo->stock;
        $historia->estado_stock_id = $activo->estado_id;
        $historia->observacion = $activo->obsevacion;
        $historia->user_id = Auth::id();
        $historia->save(); 


        return redirect()->route('movimientoingresos.index')
            ->with('success', 'Movimientoingreso updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $movimientoingreso = Movimientoingreso::find($id)->delete();

        return redirect()->route('movimientoingresos.index')
            ->with('success', 'Movimientoingreso deleted successfully');
    }
}

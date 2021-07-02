<?php

namespace App\Http\Controllers;

use App\Models\Motivocambioestado;
use Illuminate\Http\Request;

/**
 * Class MotivocambioestadoController
 * @package App\Http\Controllers
 */
class MotivocambioestadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motivocambioestados = Motivocambioestado::paginate();

        return view('motivocambioestado.index', compact('motivocambioestados'))
            ->with('i', (request()->input('page', 1) - 1) * $motivocambioestados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $motivocambioestado = new Motivocambioestado();
        return view('motivocambioestado.create', compact('motivocambioestado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Motivocambioestado::$rules);

        $motivocambioestado = Motivocambioestado::create($request->all());

        return redirect()->route('motivocambioestados.index')
            ->with('success', 'Motivocambioestado creado satisfactorimente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $motivocambioestado = Motivocambioestado::find($id);

        return view('motivocambioestado.show', compact('motivocambioestado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $motivocambioestado = Motivocambioestado::find($id);

        return view('motivocambioestado.edit', compact('motivocambioestado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Motivocambioestado $motivocambioestado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Motivocambioestado $motivocambioestado)
    {
        request()->validate(Motivocambioestado::$rules);

        $motivocambioestado->update($request->all());

        return redirect()->route('motivocambioestados.index')
            ->with('success', 'Motivocambioestado updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $motivocambioestado = Motivocambioestado::find($id)->delete();

        return redirect()->route('motivocambioestados.index')
            ->with('success', 'Motivocambioestado deleted successfully');
    }
}

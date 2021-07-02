<?php

namespace App\Http\Controllers;

use App\Models\Estadoactivo;
use Illuminate\Http\Request;

/**
 * Class EstadoactivoController
 * @package App\Http\Controllers
 */
class EstadoactivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estadoactivos = Estadoactivo::paginate();

        return view('estadoactivo.index', compact('estadoactivos'))
            ->with('i', (request()->input('page', 1) - 1) * $estadoactivos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estadoactivo = new Estadoactivo();
        return view('estadoactivo.create', compact('estadoactivo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Estadoactivo::$rules);

        $estadoactivo = Estadoactivo::create($request->all());

        return redirect()->route('estadoactivos.index')
            ->with('success', 'Estadoactivo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estadoactivo = Estadoactivo::find($id);

        return view('estadoactivo.show', compact('estadoactivo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estadoactivo = Estadoactivo::find($id);

        return view('estadoactivo.edit', compact('estadoactivo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Estadoactivo $estadoactivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estadoactivo $estadoactivo)
    {
        request()->validate(Estadoactivo::$rules);

        $estadoactivo->update($request->all());

        return redirect()->route('estadoactivos.index')
            ->with('success', 'Estadoactivo2 updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $estadoactivo = Estadoactivo::find($id)->delete();

        return redirect()->route('estadoactivos.index')
            ->with('success', 'Estadoactivo deleted successfully');
    }
}

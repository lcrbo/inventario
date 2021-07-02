<?php

namespace App\Http\Controllers;

use App\Models\Historialmovimiento;
use Illuminate\Http\Request;

/**
 * Class HistorialmovimientoController
 * @package App\Http\Controllers
 */
class HistorialmovimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        /* $id = $request->get('activo_id');
        dd($id); */
        $historialmovimientos = Historialmovimiento::orderby('updated_at','ASC')
            ->ActivoId($id)
            ->paginate();

        return view('historialmovimiento.index', compact('historialmovimientos'))
            ->with('i', (request()->input('page', 1) - 1) * $historialmovimientos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $historialmovimiento = new Historialmovimiento();
        return view('historialmovimiento.create', compact('historialmovimiento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Historialmovimiento::$rules);

        $historialmovimiento = Historialmovimiento::create($request->all());

        return redirect()->route('historialmovimientos.index')
            ->with('success', 'Historialmovimiento created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $historialmovimiento = Historialmovimiento::find($id);

        return view('historialmovimiento.show', compact('historialmovimiento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $historialmovimiento = Historialmovimiento::find($id);

        return view('historialmovimiento.edit', compact('historialmovimiento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Historialmovimiento $historialmovimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Historialmovimiento $historialmovimiento)
    {
        request()->validate(Historialmovimiento::$rules);

        $historialmovimiento->update($request->all());

        return redirect()->route('historialmovimientos.index')
            ->with('success', 'Historialmovimiento updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $historialmovimiento = Historialmovimiento::find($id)->delete();

        return redirect()->route('historialmovimientos.index')
            ->with('success', 'Historialmovimiento deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Presolicitud;
use Illuminate\Http\Request;

/**
 * Class PresolicitudController
 * @package App\Http\Controllers
 */
class PresolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $presolicituds = Presolicitud::paginate();

        return view('presolicitud.index', compact('presolicituds'))
            ->with('i', (request()->input('page', 1) - 1) * $presolicituds->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $presolicitud = new Presolicitud();
        return view('presolicitud.create', compact('presolicitud'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Presolicitud::$rules);

        $presolicitud = Presolicitud::create($request->all());

        return redirect()->route('presolicitud.index')
            ->with('success', 'Presolicitud created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $presolicitud = Presolicitud::find($id);

        return view('presolicitud.show', compact('presolicitud'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $presolicitud = Presolicitud::find($id);

        return view('presolicitud.edit', compact('presolicitud'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Presolicitud $presolicitud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Presolicitud $presolicitud)
    {
        request()->validate(Presolicitud::$rules);

        $presolicitud->update($request->all());

        return redirect()->route('presolicitud.index')
            ->with('success', 'Presolicitud updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $presolicitud = Presolicitud::find($id)->delete();

        return redirect()->route('presolicitud.index')
            ->with('success', 'Presolicitud deleted successfully');
    }
}

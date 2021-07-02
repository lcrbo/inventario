<?php

namespace App\Http\Controllers;

use App\Models\Motivodespacho;
use Illuminate\Http\Request;

/**
 * Class MotivodespachoController
 * @package App\Http\Controllers
 */
class MotivodespachoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motivodespachos = Motivodespacho::paginate();

        return view('motivodespacho.index', compact('motivodespachos'))
            ->with('i', (request()->input('page', 1) - 1) * $motivodespachos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $motivodespacho = new Motivodespacho();
        return view('motivodespacho.create', compact('motivodespacho'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Motivodespacho::$rules);

        $motivodespacho = Motivodespacho::create($request->all());

        return redirect()->route('motivodespachos.index')
            ->with('success', 'Motivodespacho created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $motivodespacho = Motivodespacho::find($id);

        return view('motivodespacho.show', compact('motivodespacho'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $motivodespacho = Motivodespacho::find($id);

        return view('motivodespacho.edit', compact('motivodespacho'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Motivodespacho $motivodespacho
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Motivodespacho $motivodespacho)
    {
        request()->validate(Motivodespacho::$rules);

        $motivodespacho->update($request->all());

        return redirect()->route('motivodespachos.index')
            ->with('success', 'Motivodespacho updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $motivodespacho = Motivodespacho::find($id)->delete();

        return redirect()->route('motivodespachos.index')
            ->with('success', 'Motivodespacho deleted successfully');
    }
}

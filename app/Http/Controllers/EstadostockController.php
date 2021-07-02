<?php

namespace App\Http\Controllers;

use App\Models\Estadostock;
use Illuminate\Http\Request;

/**
 * Class EstadostockController
 * @package App\Http\Controllers
 */
class EstadostockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estadostocks = Estadostock::paginate();

        return view('estadostock.index', compact('estadostocks'))
            ->with('i', (request()->input('page', 1) - 1) * $estadostocks->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estadostock = new Estadostock();
        return view('estadostock.create', compact('estadostock'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Estadostock::$rules);

        $estadostock = Estadostock::create($request->all());

        return redirect()->route('estadostocks.index')
            ->with('success', 'Estadostock created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estadostock = Estadostock::find($id);

        return view('estadostock.show', compact('estadostock'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estadostock = Estadostock::find($id);

        return view('estadostock.edit', compact('estadostock'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Estadostock $estadostock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estadostock $estadostock)
    {
        request()->validate(Estadostock::$rules);

        $estadostock->update($request->all());

        return redirect()->route('estadostocks.index')
            ->with('success', 'Estadostock updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $estadostock = Estadostock::find($id)->delete();

        return redirect()->route('estadostocks.index')
            ->with('success', 'Estadostock deleted successfully');
    }
}

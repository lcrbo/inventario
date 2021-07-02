<?php

namespace App\Http\Controllers;

use App\Models\Bulto;
use Illuminate\Http\Request;

/**
 * Class BultoController
 * @package App\Http\Controllers
 */
class BultoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bultos = Bulto::paginate();

        return view('bulto.index', compact('bultos'))
            ->with('i', (request()->input('page', 1) - 1) * $bultos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bulto = new Bulto();
        return view('bulto.create', compact('bulto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Bulto::$rules);

        $bulto = Bulto::create($request->all());

        return redirect()->route('bulto.index')
            ->with('success', 'Bulto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bulto = Bulto::find($id);

        return view('bulto.show', compact('bulto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bulto = Bulto::find($id);

        return view('bulto.edit', compact('bulto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Bulto $bulto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bulto $bulto)
    {
        request()->validate(Bulto::$rules);

        $bulto->update($request->all());

        return redirect()->route('bulto.index')
            ->with('success', 'Bulto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $bulto = Bulto::find($id)->delete();

        return redirect()->route('bulto.index')
            ->with('success', 'Bulto deleted successfully');
    }
}

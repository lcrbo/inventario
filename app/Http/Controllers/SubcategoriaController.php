<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Subcategoria;
use Illuminate\Http\Request;

/**
 * Class SubcategoriaController
 * @package App\Http\Controllers
 */
class SubcategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategorias = Subcategoria::paginate();

        return view('subcategoria.index', compact('subcategorias'))
            ->with('i', (request()->input('page', 1) - 1) * $subcategorias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcategoria = new Subcategoria();
        $categorias = Categoria::all();
       
        return view('subcategoria.create', compact('subcategoria' ), compact('categorias' ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Subcategoria::$rules);

        $subcategoria = Subcategoria::create($request->all());

        return redirect()->route('subcategorias.index')
            ->with('success', 'Subcategoria creada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subcategoria = Subcategoria::find($id);

        return view('subcategoria.show', compact('subcategoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subcategoria = Subcategoria::find($id);
        $categorias = Categoria::all();

        return view('subcategoria.edit', compact('subcategoria'),compact('categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Subcategoria $subcategoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subcategoria $subcategoria)
    {
        request()->validate(Subcategoria::$rules);

        $subcategoria->update($request->all());

        return redirect()->route('subcategorias.index')
            ->with('success', 'Subcategoria modificada correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $subcategoria = Subcategoria::find($id)->delete();

        return redirect()->route('subcategorias.index')
            ->with('success', 'Subcategoria borrada correctamente');
    }
}

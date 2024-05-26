<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoria = categoria::all();

        return view('admin.categorias.categoria', compact('categoria'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categorias.registrar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
        ]);
    
        categoria::create([
            'nombre' => $request->nombre,
        ]);
    
        return redirect()->route('categoria.index')->with('success', 'Categoria registrada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categoria = categoria::findOrFail($id);

        return view('admin.categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $categoria = categoria::findOrFail($id);
    

    $categoria->nombre = $request->nombre;
    
    $categoria->save();

    return redirect()->route('categoria.index')->with('success', '¡Categoria actualizada exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(categoria $categoria)
    {
        DB::table('categoria')->delete($categoria->id);

        return redirect()->route('categoria.index')->with('error', 'categoria eliminada correctamente.');
    }
}

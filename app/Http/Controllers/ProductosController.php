<?php

namespace App\Http\Controllers;

use App\Models\productos;
use App\Models\categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $producto = productos::all();

        return view('admin.productos.productos', compact('producto'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = categoria::all();
        return view('admin.productos.registrar', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required|string|max:255',
        'descripcion' => 'required|string',
        'precio' => 'required|numeric',
        'url' => 'required|file|mimes:jpg,jpeg,png,bmp,webp',
        'categoria_id' => 'required|numeric',
    ]);

    $userId = Auth::id();

    // Almacenar el archivo en el disco 'public' bajo la carpeta 'img'
    $path = $request->file('url')->store('img', 'public');

    productos::create([
        'nombre' => $request->nombre,
        'descripcion' => $request->descripcion,
        'precio' => $request->precio,
        'url' => $path,
        'user_id' => $userId,
        'categoria_id' => $request->categoria_id,
    ]);

    return redirect()->route('Productos.index')->with('success', 'Archivo creado correctamente.');
}
    /**
     * Display the specified resource.
     */
    public function show(productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $productos = productos::findOrFail($id);

        $categorias = categoria::all();

        return view('admin.productos.edit', compact('productos', 'categorias'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $producto = Productos::findOrFail($id);

    // Handle image upload (if applicable)
    if ($request->hasFile('url')) {
        $image = $request->file('url');

        // Store the image using the `store` method
        $path = $image->store('img', 'public'); // Store in 'img' directory within public disk

        // Update the product's url field with the stored image path
        $producto->url = $path;
    }

    // Update product data
    $producto->nombre = $request->nombre;
    $producto->descripcion = $request->descripcion;
    $producto->precio = $request->precio;
    $producto->categoria_id = $request->categoria_id;

    // Save the updated product
    $producto->save();

    return redirect()->route('Productos.index')->with('success', '¡Producto actualizado exitosamente!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(productos $productos)
    {
        DB::table('productos')->delete($productos->id);

        return redirect()->route('Productos.index')->with('error', 'Multimedia eliminada correctamente.');
    }
}

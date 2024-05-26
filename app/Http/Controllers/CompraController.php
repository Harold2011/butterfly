<?php

namespace App\Http\Controllers;

use App\Models\compra;
use App\Models\User;
use App\Models\productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

        if ($user->id == 1) { // Admin
            $compras = compra::all(); // Obtener todas las compras
        } else {
            $compras = compra::where('user_id', $user->id)->get(); // Obtener las compras del usuario logueado
        }

        // Obtener productos y usuarios relacionados a las compras
        $productos = productos::whereIn('id', $compras->pluck('producto_id'))->get();
        $usuarios = User::whereIn('id', $compras->pluck('user_id'))->get();

        return view('admin.pedidos.pedidos', compact('compras', 'productos', 'usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'producto_id' => 'required',
            'talla' => 'required',
            'descripcion' => 'required',
        ]);
    
        $userId = Auth::id();
        $nombreUsuario = Auth::user()->name;
        $estado = 'activo';
        
    
        compra::create([
            'user_id' => $userId,
            'producto_id' => $request->producto_id,
            'nombre' => $nombreUsuario,
            'descripcion' => $request->descripcion,
            'talla' => $request->talla,
            'estado' => $estado,
        ]);
    
        return redirect()->route('tienda.index')->with('success', 'compra realizada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(compra $compra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $compra = compra::findOrFail($id);

        $compra->estado = 'inactivo';
        
        $compra->save();

        return redirect()->route('compra.index')->with('success', '¡Categoria actualizada exitosamente!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, compra $compra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(compra $compra)
    {
        DB::table('compra')->delete($compra->id);

        return redirect()->route('compra.index')->with('error', 'pedido eliminada correctamente.');
    }
}

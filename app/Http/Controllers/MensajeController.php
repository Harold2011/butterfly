<?php

namespace App\Http\Controllers;

use App\Models\mensaje;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MensajeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mensaje = mensaje::all();

        return view('admin.mensaje.mensaje', compact('mensaje'));
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
            'nombre' => 'required',
            'correo' => 'required',
            'mensaje' => 'required',
        ]);
    
        mensaje::create([
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'mensaje' => $request->mensaje,
        ]);
    
        return redirect()->route('/')->with('success', 'Mensaje enviado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(mensaje $mensaje)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(mensaje $mensaje)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, mensaje $mensaje)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mensaje $mensaje)
    {
        DB::table('mensaje')->delete($mensaje->id);

        return redirect()->route('mensaje.index')->with('error', 'Mensaje eliminado correctamente.');
    }
}

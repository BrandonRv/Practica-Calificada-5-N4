<?php

namespace App\Http\Controllers;

use App\Models\Operador;
use Illuminate\Http\Request;

class OperadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       //return Operador::all();
       $operadores = Operador::all();
       return view('operadores.index', ['operadores' => $operadores]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('operadores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $operador = new Operador();
        $operador->nombre = $request->nombre;
        $operador->apellido = $request->apellido;
        $operador->direccion = $request->direccion;
        $operador->telefono = $request->telefono;
        $operador->edad = $request->edad;
        $operador->save();
      return "El vendedor se guardo correctamente";
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Operador::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Operador $operador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $operador = new Operador($id);
        $operador->nombre = $request->nombre;
        $operador->apellido = $request->apellido;
        $operador->direccion = $request->direccion;
        $operador->telefono = $request->telefono;
        $operador->edad = $request->edad;
        $operador->save();
      return "El vendedor se Actualizo correctamente";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $operador = Operador::find($id);
        $operador->delete();
        return "Eliminado Correctamente";
    }
}

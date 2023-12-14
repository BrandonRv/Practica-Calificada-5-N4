<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       //return Equipo::all();
        $equipo = Equipo::all();
        return view('equipos.index', ['equipos' => $equipo]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('equipos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $equipo = new Equipo();
        $equipo->nombre = $request->nombre;
        $equipo->marca = $request->marca;
        $equipo->fecha_compra = $request->fecha_compra;
        $equipo->estado = $request->estado;
        $equipo->save();
      return "El vendedor se guardo correctamente";
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Equipo::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Equipo $equipo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $equipo = new Equipo($id);
        $equipo->nombre = $request->nombre;
        $equipo->marca = $request->marca;
        $equipo->fecha_compra = $request->fecha_compra;
        $equipo->estado = $request->estado;
        $equipo->save();
      return "El vendedor se Actualizo correctamente";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $equipo = Equipo::find($id);
        $equipo->delete();
      return "Eliminado Correctamente";
    }
}

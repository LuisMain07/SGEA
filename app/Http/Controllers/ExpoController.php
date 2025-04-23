<?php

namespace App\Http\Controllers;

use App\Models\Exposiciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExpoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exposiciones = DB::table('tb_exposiciones')->orderBy('expo_nombre_evento')->get();
        return view('exposiciones.index', ['exposiciones' => $exposiciones]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('exposiciones.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $exposicion = new Exposicion();
        $exposicion->id = $request->id;
        $exposicion->obra_id = $request->obra_id;
        $exposicion->expo_fecha_inicio = $request->expo_fecha_inicio;
        $exposicion->expo_fecha_fin = $request->expo_fecha_fin;
        $exposicion->expo_ubicacion = $request->expo_ubicacion;
        $exposicion->expo_nombre_evento = $request->expo_nombre_evento;
        $exposicion->save();

        return redirect()->route('exposiciones.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $exposicion = Exposicion::find($id);
        return view('exposiciones.edit', ['exposicion' => $exposicion]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $exposicion = Exposicion::find($id);
        $exposicion->obra_id = $request->obra_id;
        $exposicion->expo_fecha_inicio = $request->expo_fecha_inicio;
        $exposicion->expo_fecha_fin = $request->expo_fecha_fin;
        $exposicion->expo_ubicacion = $request->expo_ubicacion;
        $exposicion->expo_nombre_evento = $request->expo_nombre_evento;
        $exposicion->save();

        return redirect()->route('exposiciones.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $exposicion = Exposicion::find($id);
        $exposicion->delete();

        return redirect()->route('exposiciones.index');
    }
}

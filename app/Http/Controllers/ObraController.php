<?php

namespace App\Http\Controllers;

use App\Models\Obras;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ObraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $obras = DB::table('tb_obras')->orderBy('obra_titulo')->get();
        return view('obras.index', ['obras' => $obras]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('obras.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $obra = new Obra();
        $obra->id = $request->id;
        $obra->obra_titulo = $request->titulo;
        $obra->obra_año = $request->año;
        $obra->obra_tecnica = $request->tecnica;
        $obra->obra_dimensiones = $request->dimensiones;
        $obra->obra_descripcion = $request->descripcion;
        $obra->save();

        return redirect()->route('obras.index');
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
        $obra = Obra::find($id);
        return view('Obras.edit', ['obra' => $obra]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $obra = Obra::find($id);
        $obra->obra_titulo = $request->titulo;
        $obra->obra_año = $request->año;
        $obra->obra_tecnica = $request->tecnica;
        $obra->obra_dimensiones = $request->dimensiones;
        $obra->obra_descripcion = $request->descripcion;
        $obra->save();

        return redirect()->route('Obras.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $obra = Obra::find($id);
        $obra->delete();

        return redirect()->route('obras.index');
    }
}

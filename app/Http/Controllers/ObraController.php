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
        $obras = DB::table('tb_obras')
              ->join('tb_artistas', 'tb_obras.artista_id', '=', 'tb_artistas.id')
              ->select('tb_obras.*', 'tb_artistas.art_nombre')
              ->orderBy('obra_titulo')
              ->get();
              
    return view('obras.index', ['obras' => $obras]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $artistas = DB::table('tb_artistas')->orderBy('art_nombre')->get();
        return view('obras.new', compact('artistas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'artista_id' => 'required|integer',
            'titulo' => 'required|string|max:255',
            'año' => 'required|integer',
            'tecnica' => 'required|string',
            'dimensiones' => 'required|string',
            'descripcion' => 'nullable|string'
        ]);
    
        $obra = new Obra();
        $obra->artista_id = $validatedData['artista_id'];
        $obra->obra_titulo = $validatedData['titulo'];
        $obra->obra_año = $validatedData['año'];
        $obra->obra_tecnica = $validatedData['tecnica'];
        $obra->obra_dimensiones = $validatedData['dimensiones'];
        $obra->obra_descripcion = $validatedData['descripcion'] ?? null;
        $obra->save();
    
        return redirect()->route('obras.index')->with('success', 'Obra creada exitosamente');
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
        $obra = Obras::find($id);
        return view('obras.edit', ['obra' => $obra]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $obra = Obras::find($id);
        $obra->obra_titulo = $request->obra_titulo;
        $obra->obra_año = $request->obra_año;
        $obra->obra_tecnica = $request->obra_tecnica;
        $obra->obra_dimensiones = $request->obra_dimensiones;
        $obra->obra_descripcion = $request->obra_descripcion;
        $obra->save();

        return redirect()->route('obras.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $obra = Obras::find($id);
        $obra->delete();

        return redirect()->route('obras.index');
    }
}

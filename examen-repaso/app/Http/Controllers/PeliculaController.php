<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('peliculas.index', ['peliculas' => Pelicula::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('peliculas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pelicula::create(['titulo' => $request->titulo]);
        return redirect()->route('peliculas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelicula $pelicula)
    {
        $total_entrada = $pelicula->proyecciones->flatMap->entradas->count();
        /*$proyecciones = $pelicula->proyecciones;
        foreach ($proyecciones as $proyeccion) {
            $total_entrada += $proyeccion->entradas->count();
        }*/
        return view('peliculas.show', ['pelicula'=>$pelicula, 'entradas'=>$total_entrada] );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelicula $pelicula)
    {
        return view('peliculas.edit', ['pelicula' => $pelicula]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pelicula $pelicula)
    {
        $total_entrada = $pelicula->proyecciones->flatMap->entradas->count();
        if (!$total_entrada){
            $pelicula->update(['titulo' => $request->titulo]);
        }
        return redirect()->route('peliculas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelicula $pelicula)
    {
        $total_entrada = $pelicula->proyecciones->flatMap->entradas->count();
        if (!$total_entrada){
            Pelicula::destroy($pelicula->id);
        }
        return redirect()->route('peliculas.index');
    }
}

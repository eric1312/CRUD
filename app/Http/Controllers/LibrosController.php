<?php

namespace App\Http\Controllers;

use App\Models\libros;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    public function crear() 
    {
        return view('libros.crear');
    }

    public function leer() 
    {
        $libros = \App\Models\libros::all();
        return view('libros.leer', compact('libros'));
    }

    public function eliminar() 
    {
        $libros = \App\Models\libros::all();
        return view('libros.eliminar', compact('libros'));
    }

    public function update(Request $request, libros $libro) 
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
        ]);

        $libro->update($request->all());
        
        return redirect()->route('libros.crear')->with('success', 'Libro actualizado exitosamente.');
    }


    public function store(Request $request) 
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
        ]);

        $libro = new \App\Models\libros();
        $libro->nombre = $request->input('nombre');
        $libro->descripcion = $request->input('descripcion');
        $libro->autor = $request->input('autor');
        
        $libro->save();

        return redirect()->route('libros.crear')->with('success', 'Libro creado exitosamente.');
    }

    public function destroy(Request $request){
        $id= $request->input('idLibro');
        $libro = \App\Models\libros::find($id);
        if ($libro) {
            $libro->delete();
            return redirect()->route('libros.eliminar')->with('success', 'Libro eliminado exitosamente.');
        } else {
            return redirect()->route('libros.eliminar')->with('error', 'Libro no encontrado.');
        }
        
    } 



}

<?php

namespace App\Http\Controllers;

use App\Models\Office;
use Illuminate\Http\Request;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $offices = Office::all();

        if ($request->wantsJson()) {
            // Return JSON response for API requests
            return response()->json(['offices' => $offices], 200);
        } else {
            // Return view template for web requests
            return view('office.index', compact('offices'));
        }
    }

    public function create()
    {
        return view('office.create');
    }


    /*  public function GetPrincipal()
    {
        return view('tag.principal');
    }
*/


    public function store(Request $request)
    {
        if ($request->method() === 'POST') {
            if ($request->wantsJson()) {
                // Handle JSON request
                $request->validate([
                    'Precio' => 'required',
                    'Ubicacion' => 'required',
                    'Disponibilidad' => 'required|boolean',
                    'nombre' => 'required',
                    'descripcion' => 'required',
                    'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
                ]);

                $office = new Office();
                $office->Precio = $request->input('Precio');
                $office->Ubicacion = $request->input('Ubicacion');
                $office->Disponibilidad = $request->input('Disponibilidad');
                $office->Nombre = $request->input('nombre');
                $office->Descripcion = $request->input('descripcion');
                //$office->Imagen = $request->input('imagen');


                // Manejar la carga de archivos
            if ($request->hasFile('imagen')) {
            $office->Imagen = $request->file('imagen')->store('images/offices'); // Ajusta 'tu_directorio_de_carga' según sea necesario
             }
                $office->save();

                return response()->json(['message' => 'Office created successfully'], 201);
            } else {
                // Handle web request
                $request->validate([
                    'Precio' => 'required',
                    'Ubicacion' => 'required',
                    'Disponibilidad' => 'required|boolean',
                    'nombre' => 'required',
                    'descripcion' => 'required',
                    'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
                ]);

                $office = new Office();
                $office->Precio = $request->input('Precio');
                $office->Ubicacion = $request->input('Ubicacion');
                $office->Disponibilidad = $request->input('Disponibilidad');
                $office->Nombre = $request->input('nombre');
                $office->Descripcion = $request->input('descripcion');
                //$office->Imagen = $request->input('imagen');


                if ($request->hasFile('imagen')) {
                    $office->Imagen = $request->file('imagen')->store('images/offices'); // Ajusta 'tu_directorio_de_carga' según sea necesario
                }
                $office->save();

                return redirect()->route('office.index')->with('success', 'La oficina se ha creado correctamente');
            }
        } else {
            return view('office.index');
        }
    }


    public function show(Office $office)
    {
        return view('office.show', compact('office'));
    }


    public function edit(Office $office)
    {
        return view('office.edit', compact('office'));
    }

    public function update(Request $request, Office $office)
    {
        $request->validate([
            'Precio' => 'required',
            'Ubicacion' => 'required',
            'Disponibilidad' => 'required|boolean',
            'nombre' => 'required',
            'descripcion' => 'required',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $office->Precio = $request->input('Precio');
        $office->Ubicacion = $request->input('Ubicacion');
        $office->Disponibilidad = $request->input('Disponibilidad');
        $office->Nombre = $request->input('nombre');
        $office->Descripcion = $request->input('descripcion');
        //$office->Imagen = $request->input('imagen');

        // Manejar la carga de archivos
        if ($request->hasFile('imagen')) {
            $office->Imagen = $request->file('imagen')->store('images/offices'); // Ajusta 'tu_directorio_de_carga' según sea necesario
        }

        $office->save();

        if ($request->wantsJson()) {
            return response()->json(['message' => 'Office updated successfully'], 200);
        } else {
            return redirect()->route('office.index')->with('success', 'La oficina se ha actualizado correctamente');
        }
    }


    public function destroy(Request $request, Office $office)
    {
        $office->delete();

        if ($request->wantsJson()) {
            return response()->json(['message' => 'Office deleted successfully'], 200);
        } else {
            return redirect()->route('office.index')->with('success', 'La oficina se ha eliminado correctamente');
        }
    }
}

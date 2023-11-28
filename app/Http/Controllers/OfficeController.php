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
            return response()->json(['offices' => $offices], 200);
        } else {
            return view('office.index', compact('offices'));
        }
    }

    public function create()
    {
        return view('office.create');
    }


    public function GetPrincipal()
    {
        return view('tag.principal');
    }

    /**
     * Store a newly created resource in storage.
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
                    'Nombre' => 'required',
                    'Descripcion' => 'required',
                    'Imagen' => 'nullable|url'
                ]);

                $office = new Office();
                $office->Precio = $request->input('Precio');
                $office->Ubicacion = $request->input('Ubicacion');
                $office->Disponibilidad = $request->input('Disponibilidad');
                $office->Nombre = $request->input('Nombre');
                $office->Descripcion = $request->input('Descripcion');
                $office->Imagen = $request->input('Imagen');
                $office->save();

                return response()->json(['message' => 'Office created successfully'], 201);
            } else {
                // Handle web request
                $request->validate([
                    'Precio' => 'required',
                    'Ubicacion' => 'required',
                    'Disponibilidad' => 'required|boolean',
                    'Nombre' => 'required',
                    'Descripcion' => 'required',
                    'Imagen' => 'nullable|url'
                ]);

                $office = new Office();
                $office->Precio = $request->input('Precio');
                $office->Ubicacion = $request->input('Ubicacion');
                $office->Disponibilidad = $request->input('Disponibilidad');
                $office->Nombre = $request->input('Nombre');
                $office->Descripcion = $request->input('Descripcion');
                $office->Imagen = $request->input('Imagen');
                $office->save();

                return redirect()->route('office.index')->with('success', 'La oficina se ha creado correctamente');
            }
        } else {
            return view('office.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Office $office)
    {
        return view('office.show', compact('office'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Office $office)
    {
        return view('office.edit', compact('office'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Office $office)
    {
        $request->validate([
            'Precio' => 'required',
            'Ubicacion' => 'required',
            'Disponibilidad' => 'required|boolean',
            'Nombre' => 'required',
            'Descripcion' => 'required',
            'Imagen' => 'nullable|url'
        ]);
    
        $office->Precio = $request->input('Precio');
        $office->Ubicacion = $request->input('Ubicacion');
        $office->Disponibilidad = $request->input('Disponibilidad');
        $office->Nombre = $request->input('Nombre');
        $office->Descripcion = $request->input('Descripcion');
        $office->Imagen = $request->input('Imagen');
    
        $office->save();
    
        if ($request->wantsJson()) {
            return response()->json(['message' => 'Office updated successfully'], 200);
        } else {
            return redirect()->route('office.index')->with('success', 'La oficina se ha actualizado correctamente');
        }
    }
    
    /**
     * Remove the specified resource from storage.
     */
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

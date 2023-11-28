<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;


class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $tags = Tag::all();

        if ($request->wantsJson()) {

            return response()->json(['tags' => $tags], 200);
        } else {

            return view('tag.index', compact('tags'));
        }
    }


    public function GetPrincipal()
    {
        return view('tag.principal');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tag.create');
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
                    'Nombre' => 'required',
                    'Tipo' => 'required',
                ]);

                $tag = new Tag();
                $tag->Nombre = $request->input('Nombre');
                $tag->Tipo = $request->input('Tipo');
                $tag->save();

                return response()->json(['message' => 'Tag creado con éxito'], 201);
            } else {
                // Handle web request
                $request->validate([
                    'Nombre' => 'required',
                    'Tipo' => 'required',
                ]);

                $tag = new Tag();
                $tag->Nombre = $request->input('Nombre');
                $tag->Tipo = $request->input('Tipo');
                $tag->save();
                return redirect()->route('tag.index')->with('success', 'El tag ha sido creado correctamente');
            }
        } else {
            return view('tag.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        return view('tag.show', compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        return view('tag.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'Nombre' => 'required',
            'Tipo' => 'required',
        ]);

        $tag->Nombre = $request->input('Nombre');
        $tag->Tipo = $request->input('Tipo');
        $tag->save();

        if ($request->wantsJson()) {
            return response()->json(['message' => 'Tag updated successfully'], 200);
        } else {
            return redirect()->route('tag.index')->with('success', 'El tag ha sido actualizado correctamente');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Tag $tag)
    {
        $tag->delete();

        if ($request->wantsJson()) {
            return response()->json(['message' => 'Tag deleted successfully'], 200);
        } else {
            return redirect()->route('tag.index')->with('success', 'El tag ha sido eliminado correctamente');
        }
    }

    
}

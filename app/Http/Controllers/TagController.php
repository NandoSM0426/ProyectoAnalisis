<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;


class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['tags']=Tag::get();
        return view('tag.index', $datos);
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
        $request->validate([
            'Nombre' => 'required',
            'Tipo' => 'required',
        ]);
    
        $tag = new Tag();
        $tag->Nombre = $request->input('Nombre');
        $tag->Tipo = $request->input('Tipo');
        $tag->save();
    
        return redirect()->route('tag.index'); // Redirige a la vista index después de guardar.

     /*$datosDelTag = request()->except('_token');
     Tag::insert($datosDelTag);
     return response()->json($datosDelTag);*/
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tag $tag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('tag.index')->with('success', 'El tag ha sido eliminado correctamente');
    }
}

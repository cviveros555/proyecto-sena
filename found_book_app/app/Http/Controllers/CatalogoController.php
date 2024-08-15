<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catalg = Catalogo::all();
        return view('catalogos.index', compact('catalg'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('catalogos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $catalg = new Catalogo();
        $catalg->nombre_libro = $request->input('nombre_libro');
        $catalg->autor = $request->input('autor');
        $catalg->editorial = $request->input('editorial');
        $catalg->existencia = $request->input('existencia');
        $catalg->genero = $request->input('genero');
        $catalg->descripcion = $request->input('descripcion');
        if($request->hasFile('imagen')){
            $catalg->imagen = $request->file('imagen')->store('public/catalogos');
        }
        $catalg->save();
        return 'Creado con Exito';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
        $catalg = Catalogo::find($id);
        return view('catalogos.show', compact('catalg'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        $catalg = Catalogo::find($id);
        return view('catalogos.edit', compact('catalg'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,string $id)
    {
        $catalg = Catalogo::find($id);
        $catalg->fill($request->except('imagen'));
        if ($request->hasFile('imagen')){
            $catalg->imagen = $request->file('imagen')->store('public/catalogos');
            $catalg->save();
            return 'Perfil actualizado';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docent = Docente::all();
        return view('docentes.index', compact('docent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docentes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $docent = new Docente();
        $docent->nombre = $request->input('nombre');
        $docent->apellido = $request->input('apellido');
        $docent->numero_documento = $request->input('numero_documento');
        $docent->numero_celular = $request->input('numero_celular');
        $docent->ciudad = $request->input('ciudad');
        $docent->direccion = $request->input('direccion');
        $docent->correo_electronico = $request->input('correo_electronico');
        if($request->hasFile('imagen')){
            $docent->imagen = $request->file('imagen')->store('public/docentes');
        }
        $docent->save();
        return 'Guardado con Exito';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
        $docent = Docente::find($id);
        return view('docentes.show', compact('docent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        $docent = Docente::find($id);
        return view('docentes.edit', compact('docent'));
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
        $docent = Docente::find($id);
        $docent->fill($request->except('imagen'));
        if ($request->hasFile('imagen')){
            $docent->imagen = $request->file('imagen')->store('public/docentes');
            $docent->save();
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

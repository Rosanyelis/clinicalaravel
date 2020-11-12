<?php

namespace App\Http\Controllers;

use App\Rol;
use Illuminate\Http\Request;


class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'esta es la vista de roles';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rols.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:rols|max:255',
            'description' => 'required',
        ],
        [
            'name.required' => 'El campo Nombre del rol es obligatorio',
            'name.unique'   => 'El campo Nombre de rol introducido ya existe',
            'description.required' => 'El campo Descripción del rol es obligatorio'
        ]);

        $rol = new Rol;
        $rol->name = $request->name;
        $rol->slug = str_slug($request->name, '-');
        $rol->description = $request->description;
        if ($rol->save()) {
            return redirect()->route('backoffice.roles.create')->with('success', 'El Rol fue creado con éxito');
        }else {
            return redirect()->route('backoffice.roles.create')->with('danger', 'Error al crear el registro');
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function show(Rol $rol)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function edit(Rol $rol)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rol $rol)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rol $rol)
    {
        //
    }
}

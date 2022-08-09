<?php

namespace App\Http\Controllers;

use App\Models\aplicacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AplicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       

        $datos['aplicacion'] = Aplicacion::paginate(5); //Muestra los datos del modelo 
        return view('aplicacion.index', $datos ); //Regrasas a la vista indice con los datos que hay
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('aplicacion.create'); //accedes a la vista crear
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datosAplicacion = request()->except('_token'); //Me recepciona todos los datos menos el token
        Aplicacion::insert($datosAplicacion); //Inserta los datos en la variable

       // return response()->json($datosAplicacion);
        return redirect('aplicacion'); //returna al indice
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\aplicacion  $aplicacion
     * @return \Illuminate\Http\Response
     */
    public function show(aplicacion $aplicacion)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\aplicacion  $aplicacion
     * @return \Illuminate\Http\Response
     */
    public function edit(aplicacion $aplicacion)
    {
        //
        $aplicacion=aplicacion::findOrFail($id); //Busca los datos que ya existen
        return view('aplicacion.edit', compact('aplicacion') ); //Te manda a la vista de edicio
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\aplicacion  $aplicacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, aplicacion $aplicacion)
    {
        //
        $datosAplicacion = request()->except(['_token','_method']); //Actializa los datos menos el token y el metodo
        aplicacion::where('id','=',$id)->update($datosAplicacion); //Actualiza los datos si coincide con el id

        $aplicacion=aplicacion::findOrFail($id);    //Encuentra los datos que ya existen
       // return view('aplicacion.edit', compact('aplicacion') ); //Te retorna a la vista de edicion
       return redirect('aplicacion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\aplicacion  $aplicacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(aplicacion $aplicacion)
    {
        //
        aplicacion::destroy($id); //Destruye la nota 
        return redirect('aplicacion'); //retorna al indice
    }
}

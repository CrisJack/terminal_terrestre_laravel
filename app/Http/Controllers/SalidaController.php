<?php

namespace App\Http\Controllers;

use App\Salida;
use App\Empresa;
use App\User;
use Illuminate\Http\Request;

class SalidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $precio['precios']=salida::all()
        ->load('Empresa');
        $empresa['empresas']=empresa::all();
        
        return view('salida.index',$precio,$empresa);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos=request()->except('_token');
        Salida::insert([
            'fecha' => $datos['fecha'],
            'hora' => $datos['hora'],
            'precio'=>$datos['precio'],              
            'empresa_id' => $datos['empresa_id'],
        ]);
        return redirect('salida'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Salida  $salida
     * @return \Illuminate\Http\Response
     */
    public function show(Salida $salida)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Salida  $salida
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dato=salida::findOrFail($id);

        return view('salida.edit',compact('dato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Salida  $salida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos=request()->except(['_token','_method']);
        salida::where('id','=',$id)->update($datos);

        return redirect('salida');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Salida  $salida
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        salida::destroy($id);
        return redirect('salida');
    }
}

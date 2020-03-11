<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmpresaController extends Controller
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
        $datos['empresas']=Empresa::all()->load('User');
        $datos2['usuarios']=User::all();
        
        return view('empresa.index',$datos,$datos2);
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
        if ($request->hasFile('foto')) {
            $datos['foto']=$request->file('foto')->store('uploads','public');
        }       
        empresa::insert($datos);
        return redirect('empresa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dato = empresa::findOrFail($id);
        $datos2['usuarios']=User::all();
        return view('empresa.edit',compact('dato'),$datos2);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos=request()->except(['_token','_method']);
        if ($request->hasFile('foto')) {
            //borrar la foto
            $empresa = empresa::findOrFail($id);
            Storage::delete('public/'.$empresa->foto);

            //guardar nueva foto
            $datos['foto']=$request->file('foto')->store('uploads','public');
        }

        empresa::where('id','=',$id)->update($datos);

        return redirect('empresa');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        empresa::destroy($id);
        return redirect('empresa');
    }
}

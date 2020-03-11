<?php

namespace App\Http\Controllers;

use App\User;
use App\Rol;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
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
        $dato['usuarios']=User::all()->load('Rol');
        $dato2['roles']=Rol::all();
        
        
        return view('user.index',$dato,$dato2);
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
        User::insert([
            'name' => $datos['name'],
            'email' => $datos['email'],
            'rol_id'=>$datos['rol_id'],                  
            'password' => Hash::make($datos['password']),
        ]);
        return redirect('user');        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dato=User::findOrFail($id);
        $dato2['roles']=Rol::all();
        return view('user.edit',compact('dato'),$dato2);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos=request()->except(['_token','_method']);
        user::where('id','=',$id)->update(
            [
                'name' => $datos['name'],
                'email' => $datos['email'],
                'rol_id'=>$datos['rol_id'],                  
                'password' => Hash::make($datos['password']),
            ]
        );

        return redirect('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        user::destroy($id);
        return redirect('user');
    }
}

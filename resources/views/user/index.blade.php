@extends('layouts.app')

@section('content')
<div class="mt-4 text-white">.</div>
<div class="container-fluid mt-4">

    <div class="row">
    <div class="col d-flex justify-content-start my-2">
         
                        <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crear">
                Crear Usuario
                </button>

                <!-- Modal create --> 
                <div class="modal fade" id="crear" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Crear Usuario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body"> 
                    <div class="card-body">
                    <form method="POST" action="{{ url('/user') }}">
                        {{csrf_field()}}
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombres y Apellidos') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo Electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <label for="foto" class="col-md-4 col-form-label text-md-right">{{ __('Foto') }}</label>

                            <div class="col-md-6">
                                 <input class=" m-2" type="file" name="foto">                
                            </div>
                        </div> -->

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                       

                        <div class="form-group row">
                            <label for="rol" class="col-md-4 col-form-label text-md-right">{{ __('Ingresar Rol') }}</label>

                            <div class="col-md-6">
                            <select name="rol_id"  class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                    <option selected>Elige el rol</option>
                                    @foreach($roles as $valor)
                                    <option value="{{$valor->id}}">{{$valor->name}}</option>
                                    @endforeach                                   
                             </select>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </form>
                </div>
         

                    
                        
                    </div>
                    </div>
                </div>
                </div>



    </div>        
    </div>
    <div class="row">
        <div class="col-9">           
               
                <table class= "table" style="background: rgba(64, 224, 208, 0.6);">
                    <thead class="thead-dark">
                    <th>N°</th>
                    <th>Nombre</th>
                    <th>Rol</th>
                    <th>Correo</th>        
                    <th>Acciones</th>
                    </thead>
                
                    <tbody>
                        @foreach($usuarios as $value)
                        <tr class="text-dark">
                            <td>{{$loop->iteration}}</td>
                            <td>{{$value->name}}</td>
                            <td>{{$value->rol->name}}</td> 
                            <td>{{$value->email}}</td>               
                            <td class="d-flex justify-content-center"><a class="btn btn-warning mx-1" href="{{url('/user/'.$value['id'].'/edit')}}">Editar</a>              
                            
                            <form action="{{url('/user/'.$value['id'])}}" method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button class="btn btn-danger mx-1" type="submit" onclick="return confirm('¿Estas Seguro de querer Borrar?')">Borrar</button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        
        </div>

        <div class="col-3">
            <div class="card">
                <div class="card-header bg-info text-white">Bienvenidos al Foro</div>

                    <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <iframe class="col" src="{{ url('/mensaje') }}" frameborder="0" height="400px"></iframe>
                            <iframe class="col px-0" src="{{ url('/mensaje/create') }}" frameborder="0" height="100px"></iframe>
                    </div>
                </div>   
            </div>
        </div>
    </div>
</div>
@endsection

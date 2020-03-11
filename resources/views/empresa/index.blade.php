@extends('layouts.app')

@section('content')
@if(Auth::user()->rol_id == 1)
<div class="mt-4 text-white">.</div>
<div class="container-fluid mt-4">

    <div class="row">
    <div class="col d-flex justify-content-start my-2">
         
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crear">
  Crear Empresa
</button>

<!-- Modal create --> 
<div class="modal fade" id="crear" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear Empresa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{url('/empresa')}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
        
    <div class="form-group">
    <label for="formGroupExampleInput">Nombre</label>
    <input name="name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Ingrese el Nombre de su Empresa">
    </div>
    <div class="form-group">
    <label for="formGroupExampleInput2">Ruc</label>
    <input name="ruc" type="number" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese el Ruc de su Empresa">
    </div>
    <div class="form-group">
    <label for="formGroupExampleInput2">Foto</label>
    <input class="" type="file" name="foto">
    </div>
    <div class="form-group">
    <label for="formGroupExampleInput2">Usuario</label>
    <select name="user_id"  class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
    <option selected>Seleccione el Usuario</option>
    @foreach($usuarios as $value)    
    <option value="{{$value->id}}">{{$value->name}}</option> 
    @endforeach   
    </select>
    </div>

      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
      <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>


    </div>        
    </div>
    <div class="row">
        <div class="col-9">
            
                <!-- <nav class="navbar navbar-expand-lg navbar-dark rounded-pill" style="background: rgba(64, 224, 208, 0.6);">                
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    <li class="nav-item active mx-1">
                        <a class="btn btn-outline-dark" href="#">Lista de Empresas<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="btn btn-outline-dark" href="#">Lista de Usuarios</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="btn btn-outline-dark" href="#">Crear Empresa</a>
                    </li> 
                    <li class="nav-item mx-1">
                        <a class="btn btn-outline-dark" href="#">Crear Usuarios</a>
                    </li>                   
                    </ul>
                </div>
                <div class="spinner-grow text-info" role="status">
                <span class="sr-only">Loading...</span>
                </div>
                </nav> -->
    <table class= "table" style="background: rgba(64, 224, 208, 0.6);">
        <thead class="thead-dark">
        <th>#</th>
        <th>RUC</th>
        <th>Nombre</th>
        <th>Usuario</th>
        <th>Foto</th>         
        <th>Acciones</th>
        </thead>
       
        <tbody>
            @foreach($empresas as $value)
            <tr class="text-dark">
                <td>{{$loop->iteration}}</td>
                <td>{{$value->ruc}}</td>
                <td>{{$value['name']}}</td> 
                <td>{{$value->user->name}}</td> 
                <td><img src="{{asset('storage').'/'.$value['foto']}}" width=100></td>               
                <td class="d-flex justify-content-center"><a class="btn btn-warning mx-1" href="{{url('/empresa/'.$value['id'].'/edit')}}">Editar</a>              
                
                <form action="{{url('/empresa/'.$value['id'])}}" method="post">
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
@endif
@endsection

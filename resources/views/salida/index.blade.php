@extends('layouts.app')

@section('content')
<div class="mt-4 text-white">.</div>
<div class="container-fluid mt-4">

    <div class="row">
    @foreach($empresas as $values)
    @if($values->user->id == Auth::user()->id)
    <div class="col d-flex justify-content-start my-2">
         
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crear">
  Agregar Salida
</button>

<!-- Modal create --> 
<div class="modal fade" id="crear" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Salida</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{url('/salida')}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}

     <div class="form-group">    
    <input name="empresa_id" type="hidden" class="form-control" value="{{$values->id}}">
    </div>   
    <div class="form-group">
    <label for="fecha">Fecha</label>
    <input name="fecha" type="date" class="form-control" id="formGroupExampleInput" required>
    </div>
    <div class="form-group">
    <label for="formGroupExampleInput2">Hora</label>
    <input name="hora" type="time" class="form-control" id="formGroupExampleInput2" required>
    </div>
    <div class="form-group">
    <label for="formGroupExampleInput2">Precio</label>
    <input name="precio" type="double" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese el precio del pasaje" required>
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
    <div class="col d-flex justify-content-end my-2">
   
    <h4 class="text-white ">Empresa: <span>{{$values->name}}</span></h4>
      
    </div>        
    </div>
    <div class="row">
        <div class="col-9">                        
    <table class= "table" style="background: rgba(64, 224, 208, 0.6);">
        <thead class="thead-dark">
        <th>N°</th>
        <!-- <th>Empresa</th> -->
        <th>Fecha</th>
        <th>Hora</th>        
        <th>Precio(S/.)</th>
        <th>Acciones</th>
        </thead>
       
        <tbody>
            @foreach($precios as $value)
            <tr class="text-dark">
            @if($value->empresa_id == $values->id)
                <td>{{$loop->iteration}}</td>                
                <td>{{$value->fecha}}</td> 
                <td>{{$value->hora}}</td>
                <td><span>S/.</span>{{$value->precio}}</td>                
                <td class="d-flex justify-content-center"><a class="btn btn-warning mx-1" href="{{url('/salida/'.$value['id'].'/edit')}}">Editar</a>              
                
                <form action="{{url('/salida/'.$value['id'])}}" method="post">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <button class="btn btn-danger mx-1" type="submit" onclick="return confirm('¿Estas Seguro de querer Borrar?')">Borrar</button>
                </form>
                </td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
        
        </div>
        @endif
      
    @endforeach 
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

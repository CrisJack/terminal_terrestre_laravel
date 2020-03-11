@extends('layouts.app')

@section('content')
@if(Auth::user()->rol_id == 1)
<div class="mt-4 text-white">.</div>
<div class="container">
<div class="row">
<div class="col">
<div class="" id="editar" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Empresa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{url('/empresa/'.$dato['id'])}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    {{method_field('PATCH')}}
        
    <div class="form-group">
    <label for="formGroupExampleInput">Nombre</label>
    <input name="name" type="text" class="form-control" id="formGroupExampleInput" value="{{$dato->name}}">
    </div>
    <div class="form-group">
    <label for="formGroupExampleInput2">Ruc</label>
    <input name="ruc" type="number" class="form-control" id="formGroupExampleInput2" value="{{$dato->ruc}}">
    </div>
    <div class="form-group">
    <label for="formGroupExampleInput2">Foto</label>
    <img class="mx-4" src="{{asset('storage').'/'.$dato['foto']}}" width=100>
    <input class="m-2" type="file" name="foto">
    </div>
    <div class="form-group">
    <label for="formGroupExampleInput2">Usuario</label>
    <select name="user_id"  class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
    <option value="{{$dato->user_id}}" selected>{{$dato->user->name}}</option>
    @foreach($usuarios as $value)    
    <option value="{{$value->id}}">{{$value->name}}</option> 
    @endforeach   
    </select>
    </div>

      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Actualizar Datos</button>
      </form>
      <a class="btn btn-secondary" href="{{ url('/empresa') }}">{{ __('Salir') }}</a>
        
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
               
@endif
@endsection

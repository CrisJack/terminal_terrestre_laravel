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
        <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="{{ url('/user/'.$dato['id']) }}">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombres y Apellidos') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $dato->name}}" required autocomplete="name" autofocus>

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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $dato->email }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
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
                                    <option value="{{$dato->rol_id}}" selected>{{$dato->rol->name}}</option>
                                    @foreach($roles as $value)
                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach                                  
                             </select>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Actualizar') }}
                                </button>
                                <a class="btn btn-secondary" href="{{ url('/user') }}">{{ __('Cancelar') }}</a>
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
               
@endif
@endsection

@extends('layouts.app')

@section('content')
<div class="mt-4 text-white">.</div>
<div class="container">
<div class="row">
<div class="col">
                <div class="" id="crear" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Editar Salida</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form action="{{url('/salida/'.$dato['id'])}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('PATCH')}}

                    <div class="form-group">    
                    <input name="empresa_id" type="hidden" class="form-control" value="{{$dato->empresa_id}}">
                    </div>                    
                    <div class="form-group">
                    <label for="fecha">Fecha</label>
                    <input name="fecha" type="date" class="form-control" id="formGroupExampleInput" value="{{$dato->fecha}}" required>
                    </div>
                    <div class="form-group">
                    <label for="formGroupExampleInput2">Hora</label>
                    <input name="hora" type="time" class="form-control" id="formGroupExampleInput2" value="{{$dato->hora}}" required>
                    </div>
                    <div class="form-group">
                    <label for="formGroupExampleInput2">Precio</label>
                    <input name="precio" type="double" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese el precio del pasaje" value="{{$dato->precio}}" required>
                    </div>

                    </div>
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    </form>
                    <a class="btn btn-secondary" href="{{ url('/salida') }}">{{ __('Salir') }}</a>
                        
                    </div>
                    </div>
                </div>
                </div>
</div>
</div>
</div>
</div>               

@endsection

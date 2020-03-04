@extends('layouts.app')

@section('content')
<div class="mt-4 text-white">.</div>
<div class="container-fluid mt-4">

    <!-- <div class="row">
    <div class="col d-flex justify-content-start my-2">
         <button class="btn btn-primary">Crear Empresa</button>
    </div>        
    </div> -->
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

@extends('layouts.app') 
@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li
            data-target="#carouselExampleIndicators"
            data-slide-to="0"
            class="active"
        ></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img
                src="{{url('storage/img/fondo1.jpg')}}"
                style="height:500px"
                class="d-block w-100"
                alt="..."
            />
            <div class="carousel-caption d-none d-md-block">
        <h3>Imaginacón</h3>
        <p>Todo es Posible</p>
      </div>
        </div>
        <div class="carousel-item">
            <img
                src="{{url('storage/img/fondo2.jpg')}}"
                style="height:500px"
                class="d-block w-100"
                alt="..."
            />
            <div class="carousel-caption d-none d-md-block">
        <h3>Imaginacón</h3>
        <p>Todo es Posible</p>
      </div>
        </div>
        <div class="carousel-item">
            <img
                src="{{url('storage/img/fondo3.jpg')}}"
                style="height:500px"
                class="d-block w-100"
                alt="..."
            />
            <div class="carousel-caption d-none d-md-block">
        <h3>Imaginacón</h3>
        <p>Todo es Posible</p>
      </div>
        </div>
    <style>
        .overlay{
    background-color: rgb(1,1,1,0.5);
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
        }
.overlay .caja{
    height: 50vh;    
    margin-right:80px; 
}
        </style>
        <div class="overlay">
                            <div class="container-fluid">
                                <div class="row caja align-items-center">
                                    <div class="col col-sm-12 text-sm-center col-md-5 offset-md-6 text-center text-md-right">
                                        <h1 class="text-light">La Vida del Código</h1>
                                        <p class="d-none d-sm-block text-light">
                                            Codigo Conf llega por pimera vez a Hawaii! Un evento para compartir con nuestra comunidad el conocimiento y experiencia de los expertos que están creando el futuro de internet. Ven a conocer a miembros del Team Codigo, a otros estudiantes de Codigo y a los oradores de primer nivel que tenemos para ti. Te esperamos!
                                        </p>
                                        <a type="button" class="btn btn-outline-light mr-2" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                                        <!-- <a type="button" class="btn btn-success mr-4 position-relative" href="{{ route('register') }}">{{ __('Registrarse') }}</a>                              -->
                                    </div>
                                </div>
                            </div>
                        </div>
    </div>
    <a
        class="carousel-control-prev"
        href="#carouselExampleIndicators"
        role="button"
        data-slide="prev"
    >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a
        class="carousel-control-next"
        href="#carouselExampleIndicators"
        role="button"
        data-slide="next"
    >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container">
    <div class="row">
        <div class="col text-center">
        <h1 class="text-white">Perfil <small class="text-warning">Profesional</small></h1>
            <div class="card-deck mx-4">
                <div class="col-12 my-4">
                    <div class="card with-12rem">
                        <div class="card-header bg-info text-white">
                            Presentación
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-auto col-lg-6">
                                <img src="{{url('storage/img/perfil.png')}}" style="width:23rem;" alt="">
                                    <h5 class="card-title">Mi nombre es</h5>
                                    <p class="card-text">
                                        Cristhian Jack López Suasnabar
                                    </p>
                                </div>
                                <div class="col-auto col-lg-6 text-left">
                                    <h5 class="card-title">Esperiencia :</h5><hr>
                                    <p class="card-text">
                                    <i class="fa fa-address-book-o" aria-hidden="true"></i>
 5 años como Tutor Vitual (herramientas (Moodle y Chamilo))
                                    </p>
                                    <p class="card-text">
                                    <i class="fa fa-address-book-o" aria-hidden="true"></i>
 1 año en soporte y administración de redes 
                                    </p>
                                    <p class="card-text">
                                    <i class="fa fa-address-book-o" aria-hidden="true"></i>
 2 años en soporte de equipos informáticos
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-center">
        <div class="col"><h1 class="text-white">Conocimiento <small class="text-warning">En</small></h1></div>
    </div>
    <div class="row text-center">
        <div class="col">
            <div class="card-deck mx-4">
                <div class="col-12 my-4">
                    <div class="card with-12rem">
                        <div class="card-header bg-info text-white">
                            Presentación
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-auto col-lg-6">
                                    <img src="{{url('storage/img/laravel.png')}}" style="width:23rem;" alt="">
                                    <h5 class="card-title">Laravel</h5>
                                    <p class="card-text">
                                        Desarrollo de aplicaiones web en Laravel
                                    </p>
                                </div>
                                <div class="col-auto col-lg-6">
                                    <img src="{{url('storage/img/angular.png')}}" style="width:10rem;" alt="">
                                    <h5 class="card-title">Angular</h5>
                                    <p class="card-text">
                                        Desarrollo de aplicaiones web en Angular
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container text-white m-4">.............................</div>
@endsection


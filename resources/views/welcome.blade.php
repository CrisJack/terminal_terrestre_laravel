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
        <h3>Imaginación</h3>
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
        <h3>Imaginación</h3>
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
        <h3>Imaginación</h3>
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
    @foreach($salidas as $value)
        <div class="col-12 col-md-4 col-lg-3 text-center my-2">
        
                        <div class="card bg-info text-white" >
                <img src="{{asset('storage').'/'.$value->empresa['foto']}}" class="card-img-top" alt="..." height=100>
                <div class="card-body">
                    <h5 class="card-title">{{$value->empresa->name}}</h5>                    
                </div>
                <ul class="list-group list-group-flush text-dark">
                        <?php 
                        ini_set('date.timezone','America/Lima');
                        setlocale(LC_TIME, "spanish");
                        $fecha = strftime("%A, %d %B ", strtotime($value->fecha));
                        $hora=strftime("%R",strtotime($value->hora))
                        ?>
                    <li class="list-group-item d-flex justify-content-start"><span class="mr-2"><b>Fecha</b></span> <?php echo $fecha ?></li>
                    <li class="list-group-item d-flex justify-content-start"><span class="mr-2"><b>Hora de Salida</b></span><?php echo $hora ?> horas</li>                    
                </ul>
                <div class="card-body">
                <h5 class="card-title"><span><b>Precio </b> S/.</span>{{$value->precio}} soles</h5>                    
                </div>
                </div>
                
        </div>
        @endforeach
    </div>
    <div class="row text-center">
        <div class="col">
        </div>
    </div>
    <div class="row text-center">
        <div class="col">
            
        </div>
    </div>
</div>

<div class="container text-white m-4">.</div>
@endsection


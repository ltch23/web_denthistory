@extends('layouts.menu')
@section('content')

<section class="we-offer-area section-gap" id="offer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h5>Mis Doctores</h5>
                                        
                    <ul>
                    <li><a href="mMedico1">Juan Perez</a></li>
                    <li><a href="#medico2">Jose Zuñiga</a></li>
                    <li><a href="#medico3">Luis Barios</a></li>
                    </ul>
                <h5>Autorizar</h5>
    
                <form id="buscador" name="buscador" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                    <input autocomplete="off" list="listdoctores" class="form-control" id="doctores" name="doctores" placeholder="Buscar por nombre o correo" type="text">
                    <datalist id="listdoctores">
                        @foreach($doctores as $doc)
                            <option data-id="{{$doc->id}}" value="{{$doc->nombres}} {{$doc->apellidos}} {{$doc->correo}}">
                        @endforeach
                    </datalist>

                    <input id="buscar" name="buscar" type="search" placeholder="Ingrese nombre de medico aqui..." autofocus >
                    <input type="submit" name="buscador" class="boton peque aceptar" value="buscar">
                </form>

                <a class="btn-redondo"><span class="fa fa-key"></span></a>
            </div>
        </div>
    </div>
</section>

@endsection

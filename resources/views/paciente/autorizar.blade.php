@extends('layouts.menu')
@section('content')

<section class="we-offer-area section-gap" id="offer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h5>Mis Doctores</h5>
                    <ul>
                     @foreach($mis_doctores as $doc)
                    <li><a href="{{$doc->id}}"> {{$doc->nombres}} {{$doc->apellidos}} {{$doc->correo}}
                    @endforeach
                    </ul>
                                                            
                <h5>Autorizar</h5>
    
                <form id="buscador" name="buscador" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                    <input autocomplete="off" list="listdoctores" class="form-control" id="doctores" name="doctores" placeholder="Buscar por nombre o correo" type="text">
                    <datalist id="listdoctores">
                        @foreach($doctores as $doc)
                            <option data-id="{{$doc->id}}" value="{{$doc->nombres}} {{$doc->apellidos}} {{$doc->correo}}">
                        @endforeach
                    </datalist>

                </form>

                <a class="btn-redondo"><span class="fa fa-key"></span></a>
            </div>
        </div>
    </div>
</section>

@endsection

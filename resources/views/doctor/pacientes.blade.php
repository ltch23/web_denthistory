


@extends('layouts.menu')
@section('content')


<section class="we-offer-area section-gap" id="offer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="list-group">
                    <h5>Mis Pacientes</h5>
          
                    @foreach($mis_pacientes as $pac)
                    <a href="{{$pac->id}}" class="list-group-item">
                        <div class="row">
                            <div class="col-md-2 fecha">
                            {{$pac->nombres}} {{$pac->apellidos}}
                            </div>
                            <div class="col-md-10">
                                <span class="fa fa-user-o"></span> {{$pac->nombres}}<br>
                                <div class="cortar">
                                    <span class="fa fa-bookmark-o"></span>
                                     {{$pac->correo}}  {{$pac->telefono}} 
                                    </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

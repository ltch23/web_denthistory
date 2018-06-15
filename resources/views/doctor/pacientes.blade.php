


@extends('layouts.menu')
@section('content')


<section class="we-offer-area section-gap" id="offer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h5>Mis Pacientes</h5>
                    <ul>
                     @foreach($mis_pacientes as $pac)
                    <li><a href="{{$pac->id}}"> {{$pac->nombres}} {{$pac->apellidos}} {{$pac->correo}}
                    @endforeach
                    </ul>
            </div>
        </div>
    </div>
</section>

@endsection

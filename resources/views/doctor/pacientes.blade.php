@extends('layouts.menu')
@section('content')

<section class="we-offer-area section-gap" id="offer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="list-group">
                    <?php $cont = 0?>
                @foreach($pacientes as $pa)
                        <a href="{{url('/historia_paciente/'.$nombres[$cont]->id)}}" class="list-group-item">
                            <div class="row">
                                <div class="col-md-12">
                                    <span class="fa fa-user-circle" style="font-size: 20px"></span> {{$nombres[$cont]->nombres}} {{$nombres[$cont]->apellidos}} <br>
                                </div>
                            </div>
                        </a>
                            <?php $cont += 1?>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

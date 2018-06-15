@extends('layouts.menu')
@section('content')

<section class="we-offer-area section-gap" id="offer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="{{url('/agregar_historia')}}"><span class="fa fa-plus"></span> Agregar Nueva</a>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="list-group">
                    <?php $cont = 0?>
                    @foreach($historias as $val)
                        <a href="{{url('/detalle/'.$val->id.'/'.$doctores[$cont]->id)}}" class="list-group-item">
                            <div class="row">
                                <div class="col-md-2 fecha">
                                    {{$val->fecha}}
                                </div>
                                <div class="col-md-10">
                                    <span class="fa fa-user-o"></span> {{$doctores[$cont]->nombres}} {{$doctores[$cont]->apellidos}} <br>
                                    <div class="cortar">
                                        <span class="fa fa-bookmark-o"></span>
                                        {{$val->diagnostico}}
                                    </div>
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

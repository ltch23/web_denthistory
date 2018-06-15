@extends('layouts.menu')
@section('content')

<section class="we-offer-area section-gap" id="offer">
    <div class="container">
        <div class="single-offer d-flex flex-row pb-50">
            <div class="col-lg-12">
                <h1>Detalle de historia</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <form action="{{url('/guardar_historia')}}" method="post">
            {{ csrf_field() }}
        <div class="row">
            <div class="col-lg-6">

                <div class="single-offer d-flex flex-row pb-30">
                    <div class="icon">
                        <img src="{{url('img/dentista.png')}}" alt="" width="40" height="40">
                    </div>
                    <div class="desc">
                        <h5>Médico tratante</h5>
                        <input type="text" placeholder="Doctor" name="id_doctor" value="{{$historia->id_doctor}}" />

                    </div>
                </div>


                    <div class="single-offer d-flex flex-row pb-30">
                    <div class="icon">
                        <img src="{{url('img/consulta.png')}}" alt=""  width="40" height="40">
                    </div>
                    <div class="desc">
                        <h4>Consulta</h4>
                        <p>    <b>Fecha:</b> <input type="date" placeholder="Fecha" name="fecha"  value="{{$historia->fecha}}" /></p>
                        <p>    <b>Motivo de consulta:</b>
                            <input type="text" placeholder="Motivo de consulta" name="motivo_consulta" value="{{$historia->motivo_consulta}}" /></p>
                    </div>
                </div>



                <div class="single-offer d-flex flex-row pb-30">
                    <div class="icon">
                        <img src="{{url('img/historia.png')}}" alt=""  width="40" height="40">
                    </div>
                    <div class="desc">
                        <h4>Resultados</h4>
                        <p>    <b>Diagnóstico:</b> <input type="text" placeholder="Diagnóstico" name="diagnostico"  value="{{$historia->diagnostico}}"/></p>
                        <p>    <b>Observaciones:</b> <input type="text" placeholder="Observaciones" name="observaciones"  value="{{$historia->observaciones}}"/> </p>
                    </div>
                </div>
                <div class="single-offer d-flex flex-row pb-30">
                    <div class="icon">
                        <img src="{{url('img/tratamiento.png')}}" alt=""  width="40" height="40">
                    </div>
                    <div class="desc">
                        <h4>Tratamiento</h4>
                        <p>    <b>Descripción:</b><input type="text" placeholder="Tratamiento" name="tratamiento"  value="{{$historia->tratamiento}}"/></p>
                    </div>
                </div>
                <div class="single-offer d-flex flex-row pb-30">
                    <div class="icon">
                        <img src="{{url('img/odontograma.png')}}" alt=""  width="40" height="40">
                    </div>
                    <div class="desc">
                        <h4>Recursos</h4>
                        <p>    <b>Odontograma:</b> <a href="{{url('/odontograma')}}" style="color:#009999">Click aqui </a> para editar historia.</p>
                        <p>    <b>Radiografía:</b> <input type="text" placeholder="Radiografía" name="radiografia" "/> </p>
                    </div>
                </div>
            </div>
        </div>
            <input type="submit">
        </form>
    </div>
</section>

@endsection

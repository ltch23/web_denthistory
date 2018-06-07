@extends('layouts.menu')
@section('content')

<section class="we-offer-area section-gap" id="offer">
    <div class="container">
        <div class="col-lg-12 detalle">
            {{$historia->fecha}}
        </div>
        <br>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-lg-6">
                <div class="single-offer d-flex flex-row pb-30">
                    <div class="icon">
                        <img src="{{url('img/dentista.png')}}" alt="" width="40" height="40">
                    </div>
                    <div class="desc">
                        <h5>Médico tratante</h5>
                        <p>
                            {{$doctor->nombres}} {{$doctor->apellidos}}
                        </p>

                    </div>
                </div>
                <div class="single-offer d-flex flex-row pb-30">
                    <div class="icon">
                        <img src="{{url('img/consulta.png')}}" alt=""  width="40" height="40">
                    </div>
                    <div class="desc">
                        <h4>Consulta</h4>
                        <p> <b> Motivo:</b> {{$historia->motivo_consulta}} </p>
                    </div>
                </div>
                <div class="single-offer d-flex flex-row pb-30">
                    <div class="icon">
                        <img src="{{url('img/historia.png')}}" alt=""  width="40" height="40">
                    </div>
                    <div class="desc">
                        <h4>Resultados</h4>
                        <p>    <b>Diagnóstico:</b>{{$historia->diagnostico}}</p>
                        <p>    <b>Observaciones:</b>{{$historia->observaciones}}</p>
                    </div>
                </div>
                <div class="single-offer d-flex flex-row pb-30">
                    <div class="icon">
                        <img src="{{url('img/tratamiento.png')}}" alt=""  width="40" height="40">
                    </div>
                    <div class="desc">
                        <h4>Tratamiento</h4>
                        <p>    <b>Descripción:</b> {{$historia->tratamiento}} </p>
                    </div>
                </div>
                <div class="single-offer d-flex flex-row pb-30">
                    <div class="icon">
                        <img src="{{url('img/odontograma.png')}}" alt=""  width="40" height="40">
                    </div>
                    <div class="desc">
                        <h4>Recursos</h4>
                        <p>    <b>Radiografía:</b> {{$historia->radiografia}} </p>
                        <a id="myImg" style="color:#009999">Mostrar</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 detalle">
            Cambios en Odontograma
        </div>
        <br>
        <div class="table-responsive">
            <table class="table">
                <tbody>
                <tr style="text-align: center">
                    @for($i = 1; $i <= 16; $i++)
                        <td>{{$i}}</td>
                    @endfor
                </tr>
                <tr>
                    @for($i = 1; $i <= 16; $i++)
                        <td>
                            <div class="diente">
                                <div class="trapecio-alto"></div>
                                <div class="trapecio-bajo"></div>
                                <div class="cuadrado" ></div>
                                <div class="trapecio-izq" style="border-bottom-color: #17a2b8"></div>
                                <div class="trapecio-der"></div>
                                <div class="cross" style="background-color: transparent"></div>
                                <div class="cross2" style="background-color: transparent"></div>
                                <div class="puente" style="background-color: transparent"></div>
                            </div>
                        </td>
                    @endfor
                </tr>

                <tr>
                    @for($i = 17; $i <= 32; $i++)
                        <td>
                            <div class="diente">
                                <div class="trapecio-alto"></div>
                                <div class="trapecio-bajo"></div>
                                <div class="cuadrado"></div>
                                <div class="trapecio-izq"></div>
                                <div class="trapecio-der"></div>
                                <div class="cross" style="background-color: transparent"></div>
                                <div class="cross2" style="background-color: transparent"></div>
                                <div class="puente" style="background-color: transparent"></div>
                            </div>
                        </td>
                    @endfor
                </tr>
                <tr style="text-align: center">
                    @for($i = 17; $i <= 32; $i++)
                        <td>{{$i}}</td>
                    @endfor
                </tr>
                </tbody>
            </table>
        </div>

    </div>
</section>

<div id="myModal" class="modal">
    <span class="close" style="margin-top: 45px">&times;</span>
    <img class="modal-content" id="img01" src="{{url($historia->img_radiografia)}}">
</div>
<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById('myImg');
    var modalImg = document.getElementById("img01");
    img.onclick = function(){
        modal.style.display = "block";
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
</script>

@endsection

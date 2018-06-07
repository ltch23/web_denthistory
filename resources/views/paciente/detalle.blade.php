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

        <div class="row">
            <div class="col-lg-6">
                <div class="single-offer d-flex flex-row pb-30">
                    <div class="icon">
                        <img src="img/dentista.png" alt="" width="40" height="40">
                    </div>
                    <div class="desc">
                        <a href="#"><h5>Médico tratante</h5></a>
                        <p>
                            Gregory House
                        </p>

                    </div>
                </div>
                <div class="single-offer d-flex flex-row pb-30">
                    <div class="icon">
                        <img src="img/consulta.png" alt=""  width="40" height="40">
                    </div>
                    <div class="desc">
                        <a href="#"><h4>Consulta</h4></a>
                        <p>    <b>Fecha:</b> 06 / 06 / 2018</p>
                        <p>    <b>Motivo de consulta:</b> Sensibilidad dental </p>
                    </div>
                </div>
                <div class="single-offer d-flex flex-row pb-30">
                    <div class="icon">
                        <img src="img/historia.png" alt=""  width="40" height="40">
                    </div>
                    <div class="desc">
                        <a href="#"><h4>Resultados</h4></a>
                        <p>    <b>Diagnóstico:</b> El paciente presenta indicios de caries en caninos de maxilar superior. </p>
                        <p>    <b>Observaciones:</b> Se hizo una curación y queda otra pendiente </p>
                    </div>
                </div>
                <div class="single-offer d-flex flex-row pb-30">
                    <div class="icon">
                        <img src="img/tratamiento.png" alt=""  width="40" height="40">
                    </div>
                    <div class="desc">
                        <a href="#"><h4>Tratamiento</h4></a>
                        <p>    <b>Descripción:</b> Curación de caries en caninos. </p>
                    </div>
                </div>
                <div class="single-offer d-flex flex-row pb-30">
                    <div class="icon">
                        <img src="img/odontograma.png" alt=""  width="40" height="40">
                    </div>
                    <div class="desc">
                        <a href="#"><h4>Recursos</h4></a>
                        <p>    <b>Odontograma:</b> <a href="{{url('/odontograma')}}" style="color:#009999">Click aqui</a> para ver.</p>
                        <p>    <b>Radiografía:</b> No necesaria </p>
                    </div>
                </div>
            </div>
    </div>
    </div>
</section>
<section class="we-offer-area section-gap" id="offer">
    <div class="container">
        <div class="single-offer d-flex flex-row pb-50">
            <div class="col-lg-12">
                <h1>Detalle de historia</h1>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-lg-6">
                <div class="single-offer d-flex flex-row pb-30">
                    <div class="icon">
                        <img src="img/dentista.png" alt="" width="40" height="40">
                    </div>
                    <div class="desc">
                        <a href="#"><h5>Médico tratante</h5></a>
                        <input type="text" placeholder="Doctor" name="id_doctor" required/>

                    </div>
                </div>
                <div class="single-offer d-flex flex-row pb-30">
                    <div class="icon">
                        <img src="img/consulta.png" alt=""  width="40" height="40">
                    </div>
                    <div class="desc">
                        <a href="#"><h4>Consulta</h4></a>
                        <p>    <b>Fecha:</b> <input type="date" placeholder="Fecha" name="fecha" required/></p>
                        <p>    <b>Motivo de consulta:</b> <input type="text" placeholder="Motivo de consulta" name="motivo_consulta" required/></p>
                    </div>
                </div>
                <div class="single-offer d-flex flex-row pb-30">
                    <div class="icon">
                        <img src="img/historia.png" alt=""  width="40" height="40">
                    </div>
                    <div class="desc">
                        <a href="#"><h4>Resultados</h4></a>
                        <p>    <b>Diagnóstico:</b> <input type="text" placeholder="Diagnóstico" name="diagnostico" required/></p>
                        <p>    <b>Observaciones:</b> <input type="text" placeholder="Observaciones" name="observaciones" required/> </p>
                    </div>
                </div>
                <div class="single-offer d-flex flex-row pb-30">
                    <div class="icon">
                        <img src="img/tratamiento.png" alt=""  width="40" height="40">
                    </div>
                    <div class="desc">
                        <a href="#"><h4>Tratamiento</h4></a>
                        <p>    <b>Descripción:</b><input type="text" placeholder="Tratamiento" name="tratamiento" required/></p>
                    </div>
                </div>
                <div class="single-offer d-flex flex-row pb-30">
                    <div class="icon">
                        <img src="img/odontograma.png" alt=""  width="40" height="40">
                    </div>
                    <div class="desc">
                        <a href="#"><h4>Recursos</h4></a>
                        <p>    <b>Odontograma:</b> <a href="{{url('/odontograma')}}" style="color:#009999">Click aqui</a> para editar historia.</p>
                        <p>    <b>Radiografía:</b> <input type="text" placeholder="Radiografía" name="radiografia" required/> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

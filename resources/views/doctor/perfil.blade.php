@extends('layouts.menu')
@section('content')


<section class="we-offer-area section-gap" id="offer">
    <div class="container">
        <form action="{{url('/guardar_perfil_doc')}}" method="post">
            {{ csrf_field() }}

            <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-10">
            	<div class="single-testimonial item">
                    <img class="mx-auto" 
                            
                            <?php
                            if ($perfil->sexo == "Femenino") {
                                $foto = "img/doctor_2.png";
                            }
                            elseif ($perfil->sexo == "Masculino"){
                                $foto = "img/doctor_1.png";

                            }
                            else
                            {
                                $foto = "img/doctor_1.png";
                            }
                            ?>

                    
                    src={{$foto}} alt="" width="80px">
                    <!--<p class="desc">
                        En esta sección se encuentra información relevante del paciente: Nombre, Edad, Enfermedades hereditarias, alergias, etc. La información que coloque deberá ser objetiva y precisa.
                    </p>-->
                    <h4>{{$perfil->nombres}} {{$perfil->apellidos}}</h4>
                    <p>
                        Abogado de Cementos Yura
                    </p>
                </div>
                <div class="title text-center">
                    <img src="img/diente.png" alt="" height="100" width="100">
                    <h5 class="mb-10">Datos Personales</h5>
                    <p>Información de Contacto.</p>
                </div>
            </div>
        </div>
        <div class="row">
            
            <div class="col-lg-6">
                <div class="single-offer d-flex flex-row pb-30">
                    <div class="icon">
                        <img src="img/dentista.png" alt="" height="60" width="60">
                    </div>
                    <div class="desc">
                        <a href="#"><h5>Nombre Completo</h5></a>
                        <p>
                            <input class='form-control' type="text" name="nombre" value="{{$perfil->nombres}}">
                        </p>
                        <a href="#"><h5>Apellidos Completo</h5></a>
                        <p>
                            <input class='form-control' type="text" name="apellidos" value="{{$perfil->apellidos}}">
                        </p>
                        <a href="#"><h5>Sexo</h5></a>
                        <p>
                             <input class='form-control' type="text" name="sexo" value="{{$perfil->sexo}}">
                            
                        </p>
                    </div>
                </div>
                <div class="single-offer d-flex flex-row pb-30">
                    
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single-offer d-flex flex-row pb-30">
                    <div class="icon">
                        <img src="img/historia.png" alt="" height="60" width="60">
                    </div>
                    <div class="desc">
                        <a href="#"><h5>Correo Electrónico</h5></a>
                        <p>
                            <input class='form-control' type="email" name="correo" value="{{$perfil->correo}}">
                        </p>
                        <a href="#"><h5>Número Telefónico</h5></a>
                        <p>
                            <input class='form-control' type="tel" name="telefono" value="{{$perfil->telefono}}">
                        </p>
                        <a href="#"><h5>Número de Celular</h5></a>
                        <p>
                            <input class='form-control' type="tel" name="telefono_emer" value="{{$perfil->telefono_emer}}">
                        </p>
                        
                    </div>
                </div>
                <div class="single-offer d-flex flex-row pb-30">
                    
                </div>
            </div>
        </div>


        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-10">
            	
                <div class="title text-center">
                    <img src="img/odontograma.png" alt="" height="100" width="100">
                    <h4 class="mb-10">Lugar y Horario de Trabajo</h4>
                    <p>Descripción de los datos de contacto con el Doctor(a).</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="single-offer d-flex flex-row pb-30">
                    <div class="icon">
                        <img src="img/consulta.png" alt="" height="70" width="70">
                    </div>
                    <div class="desc">
                        <a href="#"><h4>Especialidad Médica</h4></a>
                        <p>
                            <input class='form-control' type="text" name="residencia" value="{{$perfil->residencia}}">
                        </p>
                        <a href="#"><h4>Clínica - Hospital de Trabajo</h4></a>
                        <p>
                            <input class='form-control' type="text" name="clinica_pac" value="{{$perfil->clinica_pac}}">
                        </p>
                    </div>
                </div>
            </div>

        <div class="row">
            <div class="col-lg-12">
            <div class="single-offer d-flex flex-row pb-30">
                    <div class="icon">
                        <img src="img/gps.png" alt="" height="60" width="60">
                    </div>
                    <div class="desc">
                        <a href="#"><h4>Lugar de Atención Médica</h4></a>
                        <p>
                            <input class='form-control' type="text" name="clinica_pac" value="{{$perfil->alergias}}">
                        </p>
                        <a href="#"><h4>Horarios de Atención</h4></a>
                        <p>
                            <input class='form-control' type="text" name="clinica_pac" value="{{$perfil->sangre}}">
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-18">
            <div class="single-offer d-flex flex-row pb-30">

            <div class="icon">
                 <img src={{$foto}} alt="" height="80" width="80">
            </div>
            <div class="desc">
                <a href="#"><h4>Más sobre mí</h4></a>
                <p>  
                <textarea class='form-control' rows="4" cols="60" name='hereditarios'>{{$perfil->hereditarios}}</textarea>
                </p>
                            
            </div>
            </div>
            </div>
        </div>
        
           <input  class='form-control' type="submit" value="Guardar">
            </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End we-offer Area -->

@endsection

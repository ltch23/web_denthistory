@extends('layouts.menu')
@section('content')


<section class="we-offer-area section-gap" id="offer">
    <div class="container">
        <form action="{{url('/guardar_perfil')}}" method="post">
            {{ csrf_field() }}

            <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-10">
            	<div class="single-testimonial item">
                    <img class="mx-auto" 
                            
                            <?php
                            if ($perfil->sexo == "Femenino") {
                                $foto = "img/cliente_2.png";
                            }
                            elseif ($perfil->sexo == "Masculino"){
                                $foto = "img/cliente_1.png";

                            }
                            else
                            {
                                $foto = "img/cliente_1.png";
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
                    <h5 class="mb-10">Datos Personales</h5>
                    <p>Información de Contacto.</p>
                </div>
            </div>
        </div>
        <div class="row">
            
            <div class="col-lg-6">
                <div class="single-offer d-flex flex-row pb-30">
                    <div class="icon">
                        <img src="img/contacto.png" alt="">
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
                        <a href="#"><h5>Tipo de Sangre</h5></a>
                        <p>
                            <input class='form-control' type="text" name="sangre" value="{{$perfil->sangre}}">

                        </p>
                        <a href="#"><h5>Sexo</h5></a>
                        <p>
                             <input class='form-control' type="text" name="sexo" value="{{$perfil->sexo}}">
                            
                        </p>
                    </div>
                </div>
                <div class="single-offer d-flex flex-row pb-30">
                    <div class="icon">
                        <img src="img/s4.png" alt="">
                    </div>
                    <div class="desc">
                        <a href="#"><h4>Padecimientos Hereditarios y Alergias</h4></a>
                        <p>  
                        <textarea class='form-control' rows="4" cols="50" name='hereditarios'>{{$perfil->hereditarios}}</textarea>
                        </p>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single-offer d-flex flex-row pb-30">
                    <div class="icon">
                        <img src="img/phone.jpg" alt="">
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
                        <a href="#"><h5>Número Telefónico en caso de Emergencia</h5></a>
                        <p>
                            <input class='form-control' type="tel" name="telefono_emer" value="{{$perfil->telefono_emer}}">
                        </p>
                        <a href="#"><h5>DNI</h5></a>
                        <p>
                            <input class='form-control' type="text" name="dni" value="{{$perfil->dni}}">
                        </p>
                    </div>
                </div>
                <div class="single-offer d-flex flex-row pb-30">
                    <div class="icon">
                        <img src="img/ambulance.png" alt="">
                    </div>
                    <div class="desc">
                        <a href="#"><h4>Intervenciones Quirúrguicas</h4></a>
                        <p>
                            <textarea class='form-control' rows="4" cols="50"  name='cirugia'>{{$perfil->cirugia}}</textarea>
    
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-10">
            	
                <div class="title text-center">
                    <h4 class="mb-10">Razón Social de Seguro Asociado</h4>
                    <p>Descripción de los datos de la afiliación médica.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="single-offer d-flex flex-row pb-30">
                    <div class="icon">
                        <img src="img/hospital.png" alt="">
                    </div>
                    <div class="desc">
                        <a href="#"><h4>Lugar de Residencia Actual</h4></a>
                        <p>
                            <input class='form-control' type="text" name="residencia" value="{{$perfil->residencia}}">
                        </p>
                        <a href="#"><h4>Clínica Afiliada</h4></a>
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
                        <img src="img/ps.png" alt="" height="60" width="60">
                    </div>
                    <div class="desc">
                        <a href="#"><h4>Estado Civil</h4></a>
                        <p>
                        <select class='form-control' name="civil" >
                                <option value=0>Soltero</option>
                                <option value=1>Casado</option>    
                                <option value=0>Viudo</option>
                                <option value=1>Divorciado</option>                              
                            </select> 
                        </p>
                        <a href="#"><h4>Número de Hijos</h4></a>
                        <p>
                            <input class='form-control' type="number" name="num_hijos" value="{{$perfil->num_hijos}}">
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

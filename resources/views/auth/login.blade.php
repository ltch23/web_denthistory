@extends('layouts.app')

@section('content')
    <div class="col-md-12" style="color: darkslategray;text-align: right;padding-top: 10px">
    <b>Visitas :</b> {{$contador}}
</div>
    <div class="col-md-12">

    <div class="wrap">
        <p class="form-title app_name">
            DentHistory</p>
        <img class="img-login" src="{{asset('/img/diente.png')}}" alt="" width="120px" style="margin-bottom: 20px">
        <form class="login" method="post" action="{{url('/logear')}}">
            {{ csrf_field() }}
            <input type="text" placeholder="Correo" name="correo" required/>
            <input type="password" placeholder="Contraseña" name="contrasenia" required/>
            <input type="submit" value="Iniciar Sesión" class="btn btn-login btn-sm" />
            <a href="{{ url('register') }}" class="btn btn-default btn-sm boton" >Ir a Registrar</a>
        </form>
    </div>

    </div>
@endsection


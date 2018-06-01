@extends('layouts.app')

@section('content')
    <div class="col-md-12">

    <div class="wrap">
        <p class="form-title">
            Dent History</p>
        <img class="img-login" src="{{asset('/img/diente5.png')}}" alt="">
        <form class="login" method="post" action="{{url('/logear')}}">
            {{ csrf_field() }}
            <input type="text" placeholder="Correo" name="correo" required/>
            <input type="password" placeholder="Contraseña" name="contrasenia" required/>
            <input type="submit" value="Iniciar Sesión" class="btn btn-success btn-sm" />
            <a href="{{ url('register') }}" class="btn btn-default btn-sm boton" >Ir a Registrar</a>
        </form>
    </div>
    </div>
@endsection


@extends('layouts.app')

@section('content')
    <div class="wrap">
        <p  class="form-title">
            Dent History Registro</p>
        <form class="login" method="post" action="{{url('/registrar')}}">
            {{ csrf_field() }}
            <select class="inputForm" name="tipo" >
                <option value="1">Paciente</option>
                <option value="2">Dentista</option>
            </select>
            <input type="text" placeholder="Nombre" name="nombre" required/>
            <input type="text" placeholder="Apellidos" name="apellidos" required/>
            <input type="text" placeholder="Correo Electronico" name="email" required/>
            <input type="password" placeholder="Constraseña" name="password1" required/>
            <input type="password" placeholder="Repita Constraseña" name="password2" required/>
            <input type="submit" value="Registrar" class="btn btn-success btn-sm" />
            <a href="{{ url('/login') }}" class="btn btn-default btn-sm boton" >Ir a Login</a>

        </form>
    </div>

@endsection






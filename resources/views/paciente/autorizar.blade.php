@extends('layouts.menu')
@section('content')

<section class="we-offer-area section-gap" id="offer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h5>Mis Doctores</h5>
                    <ul>
                     @foreach($mis_doctores as $doc)
                    <li><a href="{{$doc->id}}"> {{$doc->nombres}} {{$doc->apellidos}} {{$doc->correo}}
                    @endforeach
                    </ul>
                                                            
                <h5>Autorizar</h5>
    
                <form action="{{url('/nuevo_auto')}}" method="post">
                {{ csrf_field() }}
                    
                    <input autocomplete="off" list="listdoctores" class="form-control" id="doctores" name="doctores" placeholder="Buscar por nombre o correo" type="text">
                    <datalist id="listdoctores">
                        @foreach($doctores as $doc)
                            <option data-id="{{$doc->id}}" value="{{$doc->nombres}} {{$doc->apellidos}} {{$doc->correo}}">
                        @endforeach
                    </datalist>

                    <input id="id_doc" type="text" value="" name="id_doc" hidden>                    
                    <a id="aceptar_doctor" class="btn-primary">agregar doctor</a>
                    <input type="submit"/>

                </form>

                <a class="btn-redondo"><span class="fa fa-key"></span></a>
            </div>
        </div>
    </div>
</section>

<script>

    $("#aceptar_doctor").click(function(){
        console.log("entre");
    var val_doctor=$("#doctores").val();
    var ele_doctor=$('option[value="'+val_doctor+'"]');
    var id_doctor= ele_doctor.data("id");
    
    $("#id_doc").val(id_doctor);
    }); 

</script>

@endsection

@extends('layouts.menu')
@section('content')
<script type="text/javascript">
    function clicked()
        {   /*$('#myModal').modal('show');
            $('#name_diente').text("Guardado");*/
            alert("Guardado");
        }

</script>

<section class="we-offer-area section-gap" id="offer">


    <div class="container">
        <form action="{{url('/guardar_historia/'.$num)}}" method="post">
            {{ csrf_field() }}
        <div class="row">
            <div class="col-lg-12">
                <div class="single-offer d-flex flex-row pb-30">
                    <div class="icon">
                        <img src="{{url('img/consulta.png')}}" alt=""  width="40" height="40">
                    </div>
                    <div class="col-md-12 desc">
                        <h4>Consulta</h4>
                        <p>    <b>Fecha:</b> <input class="form-control" type="date" name="fecha" required/></p>
                        <p>    <b>Motivo de consulta:</b>
                            <input class="form-control" type="text"  placeholder="Motivo de consulta"  name="motivo_consulta" required/></p>
                    </div>
                </div>



                <div class="single-offer d-flex flex-row pb-30">
                    <div class="icon">
                        <img src="{{url('img/historia.png')}}" alt=""  width="40" height="40">
                    </div>
                    <div class="col-md-12 desc">
                        <h4>Resultados</h4>
                        <p>    <b>Diagnóstico:</b> <input class="form-control" type="text" placeholder="Diagnóstico" name="diagnostico"  required/></p>
                        <p>    <b>Observaciones:</b> <input class="form-control" type="text" placeholder="Observaciones" name="observaciones"  /> </p>
                    </div>
                </div>
                <div class="single-offer d-flex flex-row pb-30">
                    <div class="icon">
                        <img src="{{url('img/tratamiento.png')}}" alt=""  width="40" height="40">
                    </div>
                    <div class="col-md-12 desc">
                        <h4>Tratamiento</h4>
                        <p>    <b>Descripción:</b><input class="form-control" type="text" placeholder="Tratamiento" name="tratamiento" /></p>
                    </div>
                </div>
                <div class="single-offer d-flex flex-row pb-30">
                    <div class="icon">
                        <img src="{{url('img/odontograma.png')}}" alt=""  width="40" height="40">
                    </div>
                    <div class="col-md-12 desc">
                        <h4>Recursos</h4>
                        <p>    <b>Radiografía:</b> <input class="form-control" type="text" placeholder="Descripción" name="radiografia" /> </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-lg-12 detalle">
                Agregar al Odontograma
            </div>
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
                                <div class="diente" data-diente="diente{{$i}}" data-name="{{$dientes[$i-1]}}">
                                    <div class="dent{{$i}}">
                                        <div class="trapecio-1"></div>
                                        <div class="trapecio-3"></div>
                                        <div class="cuadrado"></div>
                                        <div class="trapecio-4"></div>
                                        <div class="trapecio-2"></div>
                                        <div class="cross" style="background-color: transparent"></div>
                                        <div class="cross2" style="background-color: transparent"></div>
                                        <div class="puente" style="background-color: transparent"></div>
                                    </div>
                                </div>
                            </td>
                        @endfor
                    </tr>

                    <tr>
                        @for($i = 17; $i <= 32; $i++)
                            <td>
                                <div class="diente" data-diente="diente{{$i}}" data-name="{{$dientes[$i-17]}}">
                                    <div class="dent{{$i}}">
                                        <div class="trapecio-1"></div>
                                        <div class="trapecio-3"></div>
                                        <div class="cuadrado"></div>
                                        <div class="trapecio-4"></div>
                                        <div class="trapecio-2"></div>
                                        <div class="cross" style="background-color: transparent"></div>
                                        <div class="cross2" style="background-color: transparent"></div>
                                        <div class="puente" style="background-color: transparent"></div>
                                    </div>
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
        <div class="row">
            <div class="col-md-12">
                <button id="masfilas" class="add_form_field">Agregar malla o fondo &  nbsp;
                    <span style="font-size:16px; font-weight:bold;">+ </span>
                </button>
                <div class="table-responsive">
                    <table id="mytable" class="table">
                        <tr>
                            <th>PÁRAMETRO</th>
                            <th>UNIDAD</th>
                            <th>ESPECIFICACIÓN</th>
                            <th>RESULTADO</th>
                            <th>opciones</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
            <button class="btn-primary form-control" type="sumit" onclick="clicked();"> Guardar </button>
        </form>
    </div>

</section>

<div class="modal fade" id="dienteModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="modal-title"><b id="name_diente"></b></div>
            </div>
            <div class="modal-body">
                <p id="info"></p>
            </div>
        </div>

    </div>
</div>
<script>
    var data = JSON.parse('<?php echo json_encode($odont); ?>');

    $('.diente').click(function() {
        var idc=($(this).data("diente"));
        var nombre=($(this).data("name"));
        $('#dienteModal').modal('show');
        $('#name_diente').text(nombre);
        var cont = modal_detalle(data[idc]);
        $('#info').html(cont);
    });

    function modal_detalle(data_dent) {
        var comas = data_dent.split(',');
        var ident;
        var cadena = '<div class="row">' +
            '<div class="col-lg-12"><div class="diente-m">\n' +
            '<div class="cruz" style="height: 40px;margin-left: 14px"></div>\n' +
            '<div class="cruz2" style="height: 40px;margin: -38px 0 0 13px"></div>\n' +
            '<div class="cuadrado" style="margin-top: -27px; background-color: white; position: absolute"></div>\n' +
            '<div class="num" style="margin: -42px 0 0 12px;">1</div>\n' +
            '<div class="num" style="margin: -12px 0 0 21px;">2</div>\n' +
            '<div class="num" style="margin: -24px 0 0 1px;">4</div>\n' +
            '<div class="num" style="margin: -13px 0 0 11px;">3</div>\n' +
            '<div class="num" style="margin: -33px 0 0 11px;position:absolute;">5</div>\n' +
            '</div><br>';
        cadena += '<ul>';
        for(i=0; i<comas.length; i++){
            var guion = comas[i].split('-');
            if(guion.length>1){
                var color;
                (guion[0]=='r') ? color = 'red' : color = '#17a2b8';
                cadena += '<li><div class="circulo" style="background: '+color+'"></div> ';
                (guion[1]=='1') ? ident = '6' : ident = '4';
                cadena += '<div style="margin: -19px 0 0 '+ident+'px; color: black;font-size: 11px" >'+guion[1]+'</div>';
                cadena += '<div style="margin: -20px 0 0 25px;">'+guion[2]+'</div></li>';
            }
            if(guion[0]=='x'){
                cadena += '<div class="cruz"></div>\n' +
                    '<div class="cruz2"></div>\n' +
                    '<div style="margin: -20px 0 0 25px;">Extracción</div>';
            }
            if(guion[0]=='p') {
                cadena += '<div class="puente" style="height: 20px; margin: 0 0 0 5px;"></div>\n' +
                    '<div style="margin: -20px 0 0 25px;">Puente</div>'
            }
        }
        cadena = cadena + '</ul></div></div>';
        return cadena;
    }

    function graficar_dent(data_dent,num) {
        var comas = data_dent.split(','); //primer dato
        for(i=0; i<comas.length; i++){
            var guion = comas[i].split('-');
            if(guion.length>1){
                var color;
                (guion[0]=='r') ? color = 'red' : color = '#17a2b8';

                if(guion[1]=='5')
                    $('.dent'+num+' .cuadrado').css('background-color',color);

                //console.log(guion);
                $('.dent'+num+' .trapecio-'+guion[1]).css('border-bottom-color',color);
            }
            if(guion[0]=='x'){
                $('.dent'+num+' .cross').css('background-color','black');
                $('.dent'+num+' .cross2').css('background-color','black');
            }
            if(guion[0]=='p'){
                $('.dent'+num+' .puente').css('background-color','red');
            }

        }
    }
    $(function() {
        var i;
        for(i=0; i<33; i++){
            var temp = 'diente'+(i+1).toString();
            if(data[temp]!=null){
                graficar_dent(data[temp],i+1);
            }
        }
    });

    $("#masfilas").click(function(){
        $("#mytable").append('<tr><td><input type="text" name="parametros[]"/></td><td> ' +
            '<input type="text" name="unidad[]"/></td><td> ' +
            '<input type="text" name="especificacion[]"/></td><td> ' +
            '<input type="text" name="resultado[]"/></td><td> ' +
            '<a href="#" class="delete">Eliminar</a></td></tr>');
        $('.delete').off().click(function(e) {
            $(this).parent('td').parent('tr').remove();
        });
    });
</script>

@endsection

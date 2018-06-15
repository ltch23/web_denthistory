@extends('layouts.menu')
@section('content')
<section class="we-offer-area section-gap" id="offer">
    <div class="container">
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
                                    <div class="trapecio-a"></div>
                                    <div class="trapecio-b"></div>
                                    <div class="cuadrado"></div>
                                    <div class="trapecio-i"></div>
                                    <div class="trapecio-d"></div>
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
                                    <div class="trapecio-a"></div>
                                    <div class="trapecio-b"></div>
                                    <div class="cuadrado"></div>
                                    <div class="trapecio-i"></div>
                                    <div class="trapecio-d"></div>
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
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h5>Leyenda</h5>
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>
                                <div class="circulo" style="background: red"></div>
                                <div style="margin: -20px 0 0 25px;">Fractura</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="circulo" style="background: #17a2b8"></div>
                                <div style="margin: -20px 0 0 25px;">Restauración</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cruz"></div>
                                <div class="cruz2"></div>
                                <div style="margin: -20px 0 0 25px;">Extracción</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="puente" style="height: 20px; margin: -10px 0 0 5px;"></div>
                                <div style="margin: -20px 0 0 25px;">Puente</div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="myModal" role="dialog">
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
        $('#myModal').modal('show');
        $('#name_diente').text(nombre);
        $('#info').html(data[idc]);
    });

    function graficar_dent(data_dent,num) {
        var comas = data_dent.split(','); //primer dato
        for(i=0; i<comas.length; i++){
            var guion = comas[i].split('-');
            if(guion.length>1){
                var color;
                if(guion[0]=='r')
                    color = '#e94222';
                else
                    color = '#17a2b8';

                if(guion[1]=='c')
                    $('.dent'+num+' .cuadrado').css('background-color',color);

                //console.log(guion);
                $('.dent'+num+' .trapecio-'+guion[1]).css('border-bottom-color',color);
            }
            if(guion[0]=='x'){
                $('.dent'+num+' .cross').css('background-color','black');
                $('.dent'+num+' .cross2').css('background-color','black');
            }
            if(guion[0]=='p'){
                $('.dent'+num+' .puente').css('background-color','#e94222');
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
</script>
@endsection

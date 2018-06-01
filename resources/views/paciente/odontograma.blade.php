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

@endsection

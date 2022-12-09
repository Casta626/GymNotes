<!DOCTYPE html>
<html>

<head>
    <style>
        #nutritionfacts {
            background-color: white;
            border: 1px solid black;
            padding: 3px;
            width: 244px;
        }

        #nutritionfacts td {
            color: black;
            font-family: 'Arial Black', 'Helvetica Bold', sans-serif;
            font-size: 8pt;
            padding: 0;
        }

        #nutritionfacts td.header {
            font-family: 'Arial Black', 'Helvetica Bold', sans-serif;
            font-size: 28px;
            white-space: nowrap;
        }

        #nutritionfacts div.label {
            float: left;
            font-family: 'Arial Black', 'Helvetica Bold', sans-serif;
        }

        #nutritionfacts div.serving {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 8pt;
            text-align: center;
        }

        #nutritionfacts div.weight {
            display: inline;
            font-family: Arial, Helvetica, sans-serif;
            padding-left: 1px;
        }

        #nutritionfacts div.dv {
            display: inline;
            float: right;
            font-family: 'Arial Black', 'Helvetica Bold', sans-serif;
            margin-right: 5px;
        }

        #nutritionfacts table.vitamins td {
            font-family: Arial, Helvetica, sans-serif;
            white-space: nowrap;
            width: 33%;
        }

        #nutritionfacts div.line {
            border-top: 1px solid black;
        }

        #nutritionfacts div.labellight {
            float: left;
            font-family: Arial, Helvetica, sans-serif;
        }

        #nutritionfacts .highlighted {
            border: 1px dotted grey;
            padding: 2px;
        }

        .contenedor {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>
</head>

<body>
    @extends('layouts.app-master')

    @section('content')

    <div class=" p-5 rounded" style="display: flex">
        <div class="contenedor">
            <div style="margin-bottom: 50px">
                <img src="{{$foto}}" alt="" height="200px">
            </div>
            <div id="nutritionfacts">
                <table width="242" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr>
                            <td align="center" class="header" style="font-size: 20px; ">Valores Nutricionales </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="serving">Por cada <span class="highlighted">100.0g</span></div>
                            </td>
                        </tr>
                        <tr style="height: 7px">
                            <td bgcolor="#000000"></td>
                        </tr>
                        <tr>
                            <td style="font-size: 7pt">
                                <div class="line">Cantidad por cada 100g</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="line">
                                    <div class="label">Calorias <div class="weight"></div>
                                    </div>
                                    <div class="dv">{{$valor_alimento->energia}}cal</div>
                                    {{-- <div style="padding-top: 1px; float: right;" class="labellight">Calories from
                                        Fat <div class="weight">56</div> --}}
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="line">
                                    <div class="label">Grasas <div class="weight"></div>
                                    </div>
                                    <div class="dv">{{$valor_alimento->grasas}}g</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="indent">
                                <div class="line">
                                    <div class="labellight">De las cuales saturadas: <div class="weight"></div>
                                    </div>
                                    <div class="dv">{{$valor_alimento->g_saturadas}}g</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="indent">
                                <div class="line">
                                    <div class="labellight">De las cuales monosaturadas: <div class="weight"></div>
                                    </div>
                                    <div class="dv">{{$valor_alimento->g_monosaturadas}}g</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="line">
                                    <div class="label">De las cuales trans: <div class="weight"></div>
                                    </div>
                                    <div class="dv">{{$valor_alimento->g_trans}}g</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="line">
                                    <div class="label">Carbohidratos: <div class="weight"></div>
                                    </div>
                                    <div class="dv">{{$valor_alimento->carbohidratos}}g</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="indent">
                                <div class="line">
                                    <div class="labellight">De los cuales azucares:
                                        <div class="weight"></div>
                                    </div>
                                    <div class="dv">{{$valor_alimento->azucares}}g</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="indent">
                                <div class="line">
                                    <div class="labellight">Fibra:
                                        <div class="weight"></div>
                                    </div>
                                    <div class="dv">{{$valor_alimento->fibra_alimentaria}}g</div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="line">
                                    <div class="label">Proteinas: <div class="weight"></div>
                                    </div>
                                    <div class="dv">{{$valor_alimento->proteinas}}g</div>
                                </div>
                            </td>
                        </tr>

                        <tr style="height: 7px">
                            <td bgcolor="#000000"></td>
                        </tr>
                        <tr>
                            <td>
                                <table cellspacing="0" cellpadding="0" border="0" class="vitamins">
                                    <tbody>
                                        <tr>
                                            <td>Sal: {{$valor_alimento->sal}}g</td>
                                            <td style="margin-left:79px;float:left;">Calcio {{$valor_alimento->calcio}}g
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Almidon {{$valor_alimento->almidon}}g</td>
                                            <td style="margin-left:80px;float:left;">Sodio {{$valor_alimento->sodio}}g
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Vitaminas: {{$valor_alimento->vitaminas}}</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </td>

                    </tbody>
                </table>
            </div>

        </div>

    </div>
</body>
@endsection

</html>
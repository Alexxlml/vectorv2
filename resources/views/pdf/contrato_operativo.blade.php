<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
</head>

<style>
    .header {
        text-align: justify;
        text-justify: inter-word;
        padding-left: 5%;
        padding-right: 5%;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 80%;
    }

    .title {
        margin-left: 5%;
        margin-right: 5%;
        border-style: solid;
        border-width: 1px;
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 90%;
    }

    .negrita {
        font-weight: bold;
    }

    .t-letra {
        font-size: 92%;
    }

    .margen-estandar {
        margin-left: 5%;
        margin-right: 5%;
    }

    .arial {
        font-family: Arial, Helvetica, sans-serif;
    }

    .f-size {
        font-size: 87.2%;
    }

    .just {
        text-align: justify;
        text-justify: inter-word;
    }

    .tab {
        display: inline-block;
        margin-left: 43px;
    }

    .tab-2 {
        display: inline-block;
        margin-left: 21.5px;
    }

    .tab-3 {
        display: inline-block;
        margin-left: 10.75px;
    }

    .page-break {
        page-break-after: always;
    }

    .page-break-auto {
        page-break-after: auto;
    }
</style>

<body class="arial">
    <br>
    <div class="page-break" style="margin-left: 5%;">
        <div class="header">
            <p style="font-size: 105%;">
                <a>CONTRATO INDIVIDUAL DE TRABAJO POR TIEMPO</a>
                @if($datosContrato[0]->tipo_contrato_id == 2)
                <b>DETERMINADO</b>
                @elseif($datosContrato[0]->tipo_contrato_id == 3)
                <b>INDETERMINADO</b>
                @endif
                <a>QUE CELEBRAN POR UNA PARTE INDUSTRIAS TECNOS, S.A.
                    DE C.V., REPRESENTADA POR EL</a> <b>LIC. EDUARDO SALVADOR YÁÑEZ PONCE DE LEÓN</b>, A QUIEN SE LE
                DENOMINARÁ
                PARA
                EFECTOS DE ESTE CONTRATO COMO "EL PATRÓN" O "EMPRESA", Y POR LA OTRA PARTE
                <b>{{ mb_strtoupper($infoColaborador[0]->nombre_desc) }}</b> A
                QUIEN SE LE DENOMINARÁ EN LO SUCESIVO COMO "EL
                TRABAJADOR", ESTABLECIENDO LAS PARTES LAS DECLARACIONES Y CLÁUSULAS QUE INTEGRAN EL PRESENTE CONTRATO EN
                EL TENOR SIGUIENTE:
            </p>
        </div>
        <p></p>
        <div class="title">
            <b>DECLARACIONES</b>
        </div>
        <br>
        <div class="f-size"
            style="margin-right: 5%; margin-left:12%; font-family: Arial, Helvetica, sans-serif; font-size: 92%;">
            <a>Declara el </a><a class="negrita t-letra">PATRÓN:</a>
        </div>
        <div class="just">
            <p class="arial margen-estandar t-letra">
                <span class="tab"></span>
                <a class="negrita">I.- </a>Ser una Sociedad Anónima de Capital Variable
                constituida con fecha 17 de abril del año 1978 mediante escritura pública numero 50642 otorgada por el
                señor
                licenciado Mario D. Reynoso, notario público de la Propiedad y Comercio del Estado de Morelos, bajo el
                No. 63 a fojas 267 del Tomo No. XXVII, Volumen 1°, 2° Auxiliar de Comercio de Fecha 28 de abril de
                1978.
            </p>

            <p class="arial margen-estandar t-letra" style="">
                <span class="tab"></span>
                <a class="negrita">II.- </a>Tener como <a class="negrita">DOMICILIO </a>del centro de trabajo el
                ubicado en
                <a class="negrita">KILOMETRO 6 DE LA CARRETERA
                    CUERNAVACA A
                    TEPOZTLÁN EN AHUATEPEC, CUERNAVACA MORELOS</a> <a>, único lugar del Centro de trabajo.</a>
            </p>

            <p class="arial margen-estandar t-letra" style=" margin-bottom:-0.5px;">
                <span class="tab"></span>
                <a class="negrita">III.- </a>Estar registrado ante la <a class="negrita">SECRETARIA DE HACIENDA Y
                    CRÉDITO PÚBLICO,</a>
                con Registro Federal de Contribuyentes <a class="negrita">ITE810721DP3.</a>
            </p>

            <p class="arial margen-estandar t-letra" style=" margin-bottom:-0.5px;">
                <span class="tab"></span>
                <a class="negrita">IV.- </a>Conforme al objeto social, la función principal del
                <a class="negrita">PATRÓN </a>es la de fabricar, ensamblar, producir, comprar, vender, distribuir,
                importar, exportar y en general comerciar a cualquier
                título con cartuchos deportivos y armas de fuego deportivas de todas clases, tipos y calibres y con
                máquinas, aparatos, motores, artículos de metal y equipo industrial de todos tipos de clases y con las
                partes accesorios y aditamentos de dichos productos, etc.
            </p>

            <p class="arial margen-estandar t-letra" style=" margin-bottom:-0.5px;">
                <span class="tab"></span>
                <a class="negrita">V.- </a>Que es su voluntad el contratar los servicios del
                <a class="negrita">TRABAJADOR </a>y requiere sus servicios.
            </p>
        </div>
        <br>
        <div style="margin-right: 10%; margin-left:12%; font-family: Arial, Helvetica, sans-serif; font-size: 92%;">
            <a>Declara el </a><a class="negrita t-letra">TRABAJADOR:</a>
        </div>

        <div class="just">
            <p class="arial margen-estandar t-letra" style=" margin-bottom:-0.5px;">
                <span class="tab"></span>
                <a class="negrita">I.- </a>Ser de
                NACIONALIDAD <a class="negrita">{{ mb_strtoupper($infoColaborador[0]->nacionalidad) }}</a>, con DOMICILIO
                en <b>CALLE</b>
                <a class="negrita">{{ mb_strtoupper($datosContrato[0]->domicilio) }}, </a>

                <a class="negrita">COL.</a>
                <a class="negrita">{{ mb_strtoupper($datosContrato[0]->colonia) }}, </a>

                <a class="negrita">{{ mb_strtoupper($datosContrato[0]->municipio) }}, </a>
                <a class="negrita">{{ mb_strtoupper($datosContrato[0]->estado) }}, </a>

                <a class="negrita">C.P.</a>
                <a class="negrita">{{ mb_strtoupper($datosContrato[0]->codigo_postal) }}</a> con

                <a>CLAVE ÚNICA DE REGISTRO DE POBLACIÓN</a>
                <a class="negrita">{{ $datosContrato[0]->curp }}, con</a>
                <b>REGISTRO FEDERAL DE CONTRIBUYENTE.</b>
                <a class="negrita">{{ $datosContrato[0]->rfc }}</a> SEXO
                <a class="negrita">@if($datosContrato[0]->genero_id == 1)
                    <b>MASCULINO.</b>
                    @elseif($datosContrato[0]->genero_id == 2)
                    <b>FEMENINO.</b>
                    @else
                    <b>NO BINARIO.</b>
                    @endif</a>
            </p>
            <p class="arial margen-estandar t-letra" style=" margin-bottom:-0.5px;">
                <span class="tab"></span>
                <a class="negrita">II.- </a>
                Tener la capacidad física y mental para desempeñar el trabajo por el que se contrata por tiempo
                @if($datosContrato[0]->tipo_contrato_id == 2)
                Determinado
                @elseif($datosContrato[0]->tipo_contrato_id == 3)
                Indeterminado
                @endif
                de acuerdo a
                las cláusulas pactadas.
            </p>
            <p class="arial margen-estandar t-letra" style=" margin-bottom:-0.5px;">
                <span class="tab"></span>
                <a class="negrita">III.- </a>
                Que es su voluntad celebrar el presente contrato por tiempo
                @if($datosContrato[0]->tipo_contrato_id == 2)
                Determinado
                @elseif($datosContrato[0]->tipo_contrato_id == 3)
                Indeterminado
                @endif
                atendiendo a la naturaleza de
                los servicios que
                se requieren y por los motivos que expresa el patrón y que a sus intereses personales así conviene el
                contrato por
                tiempo
                @if($datosContrato[0]->tipo_contrato_id == 2)
                Determinado.
                @elseif($datosContrato[0]->tipo_contrato_id == 3)
                Indeterminado.
                @endif
            </p>
        </div>
    </div>
    {{-- Segunda hoja --}}
    <br>
    <div class="page-break" style="margin-left: 5%;">
        <div class="just">
            <p class="arial margen-estandar t-letra" style=" margin-bottom:-0.5px;">
                <span class="tab"></span>
                Las partes celebran el presente contrato de trabajo conforme a lo dispuesto por el artículo 25 de la Ley
                Federal del
                Trabajo, en los siguientes términos y conforme a las siguientes:
            </p>
        </div>
        <p></p>
        <div class="title">
            <b>CLAUSULAS</b>
        </div>
        <br>
        <div class="just">
            {{-- Clausulas contratos --}}
            @if($datosContrato[0]->tipo_contrato_id == 2)
            <p class="arial margen-estandar t-letra" style=" margin-bottom:-0.5px;">
                <span class="tab"></span>
                <a class="negrita">PRIMERA.- </a>El
                <b>TRABAJADOR</b>
                <a>celebra contrato de trabajo por</a>
                <b>TIEMPO
                    @if($datosContrato[0]->tipo_contrato_id == 2)
                    DETERMINADO
                    @elseif($datosContrato[0]->tipo_contrato_id == 3)
                    INDETERMINADO
                    @endif
                </b>
                <a>con su</a>
                <b>PATRÓN.</b>
                <a>Contrato que se establece entre las partes por un periodo del</a>
                <b>{{ mb_strtoupper($fecha_inicial_contrato_dia) }} DE {{ mb_strtoupper($fecha_inicial_contrato_mes) }}
                    DEL
                    {{ mb_strtoupper($fecha_inicial_contrato_year) }}</b>
                <b>al {{ mb_strtoupper($fecha_final_contrato_dia) }} DE {{ mb_strtoupper($fecha_final_contrato_mes) }} DEL
                    {{ mb_strtoupper($fecha_final_contrato_year) }}, </b>
                <a>por tiempo
                    @if($datosContrato[0]->tipo_contrato_id == 2)
                    determinado,
                    @elseif($datosContrato[0]->tipo_contrato_id == 3)
                    indeterminado,
                    @endif
                    ello por la naturaleza del trabajo, lo anterior en virtud de que se trata de un periodo en el que
                    incrementa la demanda
                    de los productos que se manufacturan, derivado de los contratos de venta de exportación (Licencia de
                    importación
                    57447908OJ09321), cuya ejecución debe realizarse en el periodo que se indica, lo cual justifica la
                    naturaleza del
                    contrato por tiempo
                    @if($datosContrato[0]->tipo_contrato_id == 2)
                    determinado
                    @elseif($datosContrato[0]->tipo_contrato_id == 3)
                    indeterminado
                    @endif
                    aunado a que el trabajador expresa que únicamente puede comprometer la prestación de sus servicios
                    por dicho período por
                    cuestiones de carácter personal y por así convenir a sus intereses.</a>
            </p>
            @elseif($datosContrato[0]->tipo_contrato_id == 3)
            <p class="arial margen-estandar t-letra" style=" margin-bottom:-0.5px;">
                <span class="tab"></span>
                <a class="negrita">PRIMERA.- </a>El
                <b>TRABAJADOR</b>
                <a>celebra contrato de trabajo por</a>
                <b>TIEMPO
                    @if($datosContrato[0]->tipo_contrato_id == 2)
                    DETERMINADO
                    @elseif($datosContrato[0]->tipo_contrato_id == 3)
                    INDETERMINADO
                    @endif
                </b>
                <a>con su</a>
                <b>PATRÓN.</b>
                <a>Contrato que se establece entre las partes por un periodo del</a>
                <b>{{ mb_strtoupper($fecha_inicial_contrato_dia) }} DE {{ mb_strtoupper($fecha_inicial_contrato_mes) }}
                    DEL
                    {{ mb_strtoupper($fecha_inicial_contrato_year) }}</b>
                <b>al {{ mb_strtoupper($fecha_final_contrato_dia) }} DE {{ mb_strtoupper($fecha_final_contrato_mes) }} DEL
                    {{ mb_strtoupper($fecha_final_contrato_year) }}, </b>
                <a>por tiempo
                    @if($datosContrato[0]->tipo_contrato_id == 2)
                    determinado,
                    @elseif($datosContrato[0]->tipo_contrato_id == 3)
                    indeterminado,
                    @endif
                    ello por la naturaleza del trabajo, lo anterior en virtud de que se trata de un periodo en el que
                    incrementa la demanda
                    de los productos que se manufacturan, derivado de los contratos de venta de exportación (Licencia de
                    importación
                    57447908OJ09321), cuya ejecución debe realizarse en el periodo que se indica, lo cual justifica la
                    naturaleza del
                    contrato por tiempo
                    @if($datosContrato[0]->tipo_contrato_id == 2)
                    determinado
                    @elseif($datosContrato[0]->tipo_contrato_id == 3)
                    indeterminado
                    @endif
                    aunado a que el trabajador expresa que únicamente puede comprometer la prestación de sus servicios
                    por dicho período por
                    cuestiones de carácter personal y por así convenir a sus intereses.</a>
            </p>
            @elseif($datosContrato[0]->tipo_contrato_id == 3)
            <p class="arial margen-estandar t-letra" style=" margin-bottom:-0.5px;">
                <span class="tab"></span>
                <a class="negrita">PRIMERA.- </a>El trabajador de nombre
                <a class="negrita">{{ mb_strtoupper($infoColaborador[0]->nombre_desc) }}

                </a> de NACIONALIDAD
                <b>{{ mb_strtoupper($infoColaborador[0]->nacionalidad) }}</b> de
                <a class="negrita">{{ $infoColaborador[0]->edad }}</a> años de edad, ESTADO CIVIL
                <a class="negrita">@if($datosContrato[0]->estado_civil_id == 1)
                    SOLTERO
                    @elseif ($datosContrato[0]->estado_civil_id == 2)
                    CASADO
                    @else
                    UNION LIBRE
                    @endif</a>
                <a>con </a><b>DOMICILIO</b> en
                <a class="negrita">{{ mb_strtoupper($datosContrato[0]->domicilio) }}, </a>
                <a class="negrita">{{ mb_strtoupper($datosContrato[0]->colonia) }}, </a>
                <a class="negrita">{{ mb_strtoupper($datosContrato[0]->municipio) }} </a>
                <a class="negrita">C.P.</a>
                <a class="negrita">{{ mb_strtoupper($datosContrato[0]->codigo_postal) }}</a>
                <b>SEXO:</b>
                <a class="negrita">@if($datosContrato[0]->genero_id == 1)
                    <b>MASCULINO</b>
                    @elseif($datosContrato[0]->genero_id == 2)
                    <b>FEMENINO</b>
                    @else
                    <b>NO BINARIO</b>
                    @endif
                </a>
                <a>celebra contrato de trabajo por</a>
                <b>tiempo
                    @if($datosContrato[0]->tipo_contrato_id == 2)
                    Determinado
                    @elseif($datosContrato[0]->tipo_contrato_id == 3)
                    Indeterminado
                    @endif
                </b>
                <a>con su patrón </a>
                <b>INDUSTRIAS TECNOS S.A. DE C.V. </b>
                <a>quien es una persona moral con actividad empresarial, cuya negociación tiene como objeto fabricar,
                    ensamblar, producir,
                    comprar, vender, distribuir, importar, exportar y en general comerciar a cualquier título con
                    cartuchos deportivos y
                    armas de fuego deportivas de todas clases, tipos y calibres y con máquinas, aparatos, motores,
                    artículos de metal y
                    equipo industrial de todos tipos de clases y con las partes accesorios y aditamentos de dichos
                    productos, etc; contrato
                    que se establece entre las partes por un periodo indeterminado.</a>
                @endif

                <p class="arial margen-estandar t-letra" style=" margin-bottom:-0.5px;">
                    <span class="tab"></span>
                    <a class="negrita">SEGUNDA.-</a>
                    <a>El trabajador es contratado con el</a>
                    <b>PUESTO</b>
                    <a>de</a>
                    <b>{{ mb_strtoupper($infoColaborador[0]->puesto) }}</b>
                    <a>en el único domicilio del</a>
                    <b>PATRÓN</b>
                    <a>sito en</a>
                    <b>KILOMETRO 6 DE LA CARRETERA CUERNAVACA A TEPOZTLÁN EN AHUATEPEC, CUERNAVACA MORELOS,</b>
                    <a>realizando las</a>
                    <b>funciones</b>
                    <a>consistentes en:</a>
                    <b>{{ $descripcionPuesto }}</b>
                    <a>Siendo éste su</a>
                    <b>LUGAR</b>
                    <a>de trabajo.</a>
                </p>
                <p class="arial margen-estandar t-letra" style=" margin-bottom:-0.5px;">
                    <span class="tab"></span>
                    <a>Las funciones anteriores se señalan de forma enunciativa, mas no limitativa, dado que desempeñará
                        sus
                        funciones de
                        acuerdo a las necesidades inherentes al servicio principal para el que se le contrata.</a>
                    </a>
                </p>
                <p class="arial margen-estandar t-letra" style=" margin-bottom:-0.5px;">
                    <span class="tab"></span>
                    <a>El</a>
                    <b>TRABAJADOR</b>
                    <a>deberá ejecutar el trabajo con intensidad, cuidado y esmero apropiados conforme al objeto del</a>
                    <b>PATRÓN,</b>
                    <a>en el tiempo y lugares convenidos así como las indicaciones dadas por éste, por lo que acepta
                        estar
                        capacitado y tener
                        los conocimientos necesarios para desempeñar el puesto de</a>
                    <b>{{ mb_strtoupper($infoColaborador[0]->puesto) }}</b>
                    <a>con las funciones que se indica en la cláusula</a>
                    <b>SEGUNDA</b>
                    <a>del presente contrato, obligándose por ello a ejecutar su trabajo en los términos pactados en
                        este
                        contrato, con esmero,
                        intensidad, ello bajo la dirección del patrón.</a>
                    </a>
                </p>
                <p class="arial margen-estandar t-letra" style=" margin-bottom:-0.5px;">
                    <span class="tab"></span>
                    <a class="negrita">TERCERA.-</a>
                    <a>El</a>
                    <b>TRABAJADOR</b>
                    <a>deberá dar aviso al</a>
                    <b>PATRÓN,</b>
                    <a>si existe alguna causa que le impida desempeñar su trabajo o concurrir al mismo, por el tiempo de
                        vigencia del presente
                        contrato. De igual forma las partes convienen en que las únicas incapacidades que el patrón
                        reconoce, son las expedidas
                        por el Instituto Mexicano del Seguro Social debidamente requisitadas, por contar el trabajador
                        con
                        dichos beneficios del
                        régimen obligatorio de la seguridad social. Asimismo en caso de que el trabajador presente
                        alguna
                        enfermedad contagiosa,
                        deberá informar a su</a>
                    <b>PATRÓN</b>
                    <a>para tomar las medidas necesarias para con el</a>
                    <b>INSTITUTO MEXICANO DEL SEGURO SOCIAL.</b>
                </p>
        </div>
    </div>
    {{-- Tercera hoja --}}
    <br>
    <div class="page-break" style="margin-left: 5%;">
        <div class="just">
            <p class="arial margen-estandar t-letra" style=" margin-bottom:-0.5px;">
                <span class="tab"></span>
                <a>Todo lo relacionado con riesgos profesionales y enfermedades no profesionales se regirá por las
                    disposiciones de la Ley
                    Federal del Trabajo y la del Seguro Social.</a>
            </p>
            <p class="arial margen-estandar t-letra" style=" margin-bottom:-0.5px;">
                <span class="tab"></span>
                <b>CUARTA.-</b>
                <a>Se establece como</a>
                <b>PROHIBICIONES</b>
                <a>para el trabajador ejecutar cualquier acto que ponga en peligro su vida, la seguridad del centro de
                    trabajo, la de sus
                    compañeros o terceras personas, por ello deberá seguir todas las indicaciones y medidas de seguridad
                    que su patrón le
                    indique.</a>
            </p>
            <p class="arial margen-estandar t-letra" style=" margin-bottom:-0.5px;">
                <span class="tab"></span>
                <a>Asimismo se establece como prohibiciones conforme a la Ley Federal del Trabajo:</a>
            </p>
            <p class="arial margen-estandar t-letra" style=" margin-bottom:-0.5px;">
                <ul style="margin-left: 12%; margin-right: 5%;">
                    <li>Faltar al empleo sin causa justificada o sin permiso del patrón.</li>
                    <li>Concurrir a su trabajo en estado de embriaguez, o bajo la influencia de algún narcótico, droga o
                        enervante salvo que
                        exista prescripción médica.</li>
                    <li>El TRABAJADOR no puede portar ningún tipo de armas, ni herramientas punzocortantes.</li>
                    <li>Queda prohibido dentro del centro de trabajo realizar cualquier acto ajeno al trabajo o de
                        propaganda, colectas o
                        cualquier acto que no sea de los pactados en este contrato.</li>
                    <li>Queda prohibido al trabajador utilizar los recursos del centro de trabajo para un fin diverso al
                        que le fue otorgado.</li>
                </ul>
            </p>
            <p class="arial margen-estandar t-letra" style=" margin-bottom:-0.5px;">
                <span class="tab"></span>
                <a>Es también obligación del trabajador presentarse a su empleo de manera limpia, aseada, con pelo
                    corto, calzado limpio,
                    sin alhajas.</a>
            </p>
            <p class="arial margen-estandar t-letra" style=" margin-bottom:-0.5px;">
                <span class="tab"></span>
                <a class="negrita">QUINTA.-</a>
                <a>El trabajador expresa su conformidad en lo pactado en la cláusula anterior y realizar su labor
                    conforme lo establece las
                    Ley Federal del Trabajo y siguiendo los lineamientos y ordenes dados por su</a>
                <b>PATRÓN</b>
                <a>conforme al trabajo contratado.</a>
            </p>
            <p class="arial margen-estandar t-letra" style=" margin-bottom:-0.5px;">
                <span class="tab"></span>
                <a class="negrita">SEXTA.-</a>
                <a>La</a>
                <b>JORNADA SEMANAL</b>
                <a>de trabajo será de 48, 45 o 42 horas según se trate de jornada diurna, mixta o nocturna, distribución
                    de jornada que
                    será hecha por el patrón, contando con treinta minutos para tomar sus alimentos o descansar dentro
                    de la fuente de
                    trabajo.</a>
            </p>
            <p class="arial margen-estandar t-letra" style=" margin-bottom:-0.5px;">
                <span class="tab"></span>
                <a class="negrita">SÉPTIMA.-</a>
                <a>El trabajador tiene la prohibición expresa de laborar tiempo extraordinario, a menos que exista</a>
                <b>autorización por escrito</b>
                <a>por parte del representante legal de la empresa firmada por ambas partes, donde se le indique el día,
                    el tiempo
                    extraordinario que laborara, y las causas, en caso de no existir autorización en ese sentido, no
                    puede laborarlo y por
                    ende no se le pagará cantidad alguna que extienda más de su jornada legal de trabajo, siendo ésta
                    una condición sin la
                    cual no se pagará el tiempo extraordinario.</a>
            </p>
            <p class="arial margen-estandar t-letra" style=" margin-bottom:-0.5px;">
                <span class="tab"></span>
                <a class="negrita">OCTAVA.-</a>
                <b>FORMA Y MONTO DE PAGO DE SALARIO.-</b>
                <a>Se establece como salario que percibirá el trabajador por la prestación de sus servicios de</a>
                <b>${{ $sueldo }}</b>
                <b>({{ $sueldoLetra }} M.N) mensuales</b>
                <a>mismos que serán pagaderos de manera semanal, incluyendo el pago del séptimo día; siendo el día de
                    pago de su salario el
                    viernes de cada semana, y si el día del pago corresponde a su día de descanso le serán cubiertos sus
                    salarios un día
                    antes, mismo que se realizará</a>
                <b style="border-bottom: 1px solid black;">en el domicilio del PATRÓN,</b>
                <a>haciéndosele al trabajador las retenciones de ley, por concepto de aportaciones al Instituto Mexicano
                    del Seguro Social,
                    Impuesto Sobre la Renta, aportaciones al Sistema de Ahorro Para el Retiro, e INFONAVIT.</a>
            </p>
        </div>
    </div>
    <div class="page-break" style="margin-left: 5%;">
        <div class="just">
            <p class="arial margen-estandar t-letra" style=" margin-bottom:-0.5px;">
                <span class="tab"></span>
                <a>Dicho pago se realizará por medio de depósito bancario en la cuenta de nómina con el número de Cuenta
                    de débito asignada
                    por la institución bancaria Banco Santander S.A., extendiéndose el recibo de nómina correspondiente
                    al periodo, mismo
                    que deberá firmar el trabajador al momento de recibir el pago. Atento a lo anterior desde este
                    momento el trabajador
                    manifiesta su autorización expresa para el efecto de que el pago de su salario le sea realizado vía
                    depósito bancario en
                    términos del artículo 101 de la Ley Federal del Trabajo.</a>
            </p>
            <p class="arial margen-estandar t-letra" style=" margin-bottom:-0.5px;">
                <span class="tab"></span>
                <a class="negrita">NOVENA.-</a>
                <a>El</a>
                <b>TRABAJADOR</b>
                <a>será</a>
                <b>CAPACITADO Y ADIESTRADO</b>
                <a>en los términos y planes que se establezcan por la empresa, conforme a la Secretaría del Trabajo y
                    Productividad del
                    Estado de Morelos, para que el trabajador adquiera mayores conocimientos que le permitan su
                    crecimiento personal así
                    como en el desempeño de sus labores, de acuerdo a la Ley Federal del Trabajo. Asimismo con motivo de
                    la capacitación el
                    trabajador tendrá la obligación de acudir a los cursos que se impartan conforme a la Ley Federal del
                    Trabajo.</a>
            </p>
            <p class="arial margen-estandar t-letra" style=" margin-bottom:-0.5px;">
                <span class="tab"></span>
                <a class="negrita">DÉCIMA.-</a>
                <a>En términos de lo dispuesto por los artículos 79 y 80 de la Ley Federal del Trabajo y tomando en
                    consideración el plazo
                    @if($datosContrato[0]->tipo_contrato_id == 2)
                    determinado
                    @elseif($datosContrato[0]->tipo_contrato_id == 3)
                    indeterminado
                    @endif menor a un año por el cual se celebra el presente contrato, al concluir la vigencia del
                    mismo, se le pagará
                    al trabajador su parte proporcional al tiempo laborado, así como la correspondiente prima vacacional
                    a razón del 33%
                    sobre las vacaciones que le correspondan.
                </a>
            </p>
            <p class="arial margen-estandar t-letra" style=" margin-bottom:-0.5px;">
                <span class="tab"></span>
                <a class="negrita">DÉCIMA PRIMERA.-</a>
                <a>El trabajador percibirá de acuerdo a lo establecido por el artículo 87 de la Ley Federal del Trabajo
                    un aguinaldo a
                    razón de la proporción que corresponda de 21 días por el tiempo de la duración del presente
                    contrato.</a>
            </p>
            <p class="arial margen-estandar t-letra" style=" margin-bottom:-0.5px;">
                <span class="tab"></span>
                <a class="negrita">DÉCIMA SEGUNDA.-</a>
                <a>Conforme a la Ley Federal del Trabajo, el trabajador tendrá como días de descanso obligatorio los
                    días siguientes:</a>
                <ol type="I" style="margin-left: 12%; margin-right: 5%; font-weight: bold;">
                    <li><a style="font-weight: normal;">El 1º. de enero;</a></li>
                    <li><a style="font-weight: normal;">El primer lunes de febrero en conmemoración del 5 de
                            febrero;</a></li>
                    <li><a style="font-weight: normal;">El tercer lunes de marzo en conmemoración del 21 de marzo;</a>
                    </li>
                    <li><a style="font-weight: normal;">El 1º. de mayo;</a></li>
                    <li><a style="font-weight: normal;">El 16 de septiembre;</a></li>
                    <li><a style="font-weight: normal;">El tercer lunes de noviembre en conmemoración del 20 de
                            noviembre;</a></li>
                    <li><a style="font-weight: normal;">El 1º. de diciembre de cada seis años, cuando corresponda a la
                            transmisión del Poder Ejecutivo
                            Federal;</a></li>
                    <li><a style="font-weight: normal;">El 25 de diciembre, y</a></li>
                    <li><a style="font-weight: normal;">El que determinen las leyes federales y locales electorales, en
                            el caso de elecciones
                            ordinarias, para efectuar la
                            jornada electoral.</a></li>
                </ol>
            </p>
            <p class="arial margen-estandar t-letra" style=" margin-bottom:-0.5px;">
                <span class="tab"></span>
                <a>En lo no previsto en este contrato se estará a lo dispuesto por la Ley Federal del Trabajo.</a>
            </p>
            <p class="arial margen-estandar t-letra" style=" margin-bottom:-0.5px;">
                <span class="tab"></span>
                <a class="negrita">DÉCIMA TERCERA.-</a>
                <b>CLAUSULA DE CONFIDENCIALIDAD:</b>
                <a>De conformidad con lo dispuesto el artículo 134 fracción XIII, el trabajador se obliga a guardar
                    absoluta discreción y
                    no divulgar la forma y métodos de trabajo, ni información de la EMPRESA a la que tuviere acceso
                    derivado del trabajo
                    desempeñado, por ser solamente parte del</a>
                <b>PATRÓN</b>
                <a>como empresa, asumiendo las responsabilidades que de ello deriva el divulgar la información privada
                    de la empresa en
                    cuanto todo lo que hace a la operación de trabajo y forma de desarrollarse.</a>
            </p>
        </div>
    </div>
    <div style="margin-left: 5%;">
        <div class="just">
            <p class="arial margen-estandar t-letra" style=" margin-bottom:-0.5px;">
                <span class="tab"></span>
                <a class="negrita">DÉCIMA CUARTA.-</a>
                <a>El trabajador tiene la obligación de desempeñar su trabajo en la manera y términos convenidos, y en
                    caso de
                    incumplimiento al presente contrato de trabajo o a las órdenes dadas por su</a>
                <b>PATRÓN</b>
                <a>se le rescindirá su contrato de trabajo sin responsabilidad para el patrón, si incurriese en alguna
                    de las causales
                    establecidas en el artículo 47 de la Ley Federal del Trabajo</a>
            </p>
            <p class="arial margen-estandar t-letra" style=" margin-bottom:-0.5px;">
                <span class="tab"></span>
                <a>El patrón dará al trabajador aviso escrito de la fecha y causa o causas de la rescisión haciéndolo
                    del conocimiento a
                    éste, debiendo el trabajador firmar de recibido el aviso correspondiente el trabajador para su
                    conocimiento.</a>
            </p>
            <p class="arial margen-estandar t-letra" style=" margin-bottom:-0.5px;">
                <span class="tab"></span>
                <a class="negrita">DÉCIMA QUINTA.-</a>
                <a>Todo lo no estipulado expresamente en este contrato, se regirá por las disposiciones del artículo 501
                    de la Ley Federal
                    del Trabajo.</a>
            </p>
            @if($datosContrato[0]->tipo_contrato_id == 2)
            @elseif($datosContrato[0]->tipo_contrato_id == 3)
            <p class="arial margen-estandar t-letra" style=" margin-bottom:-0.5px;">
                <span class="tab"></span>
                <a class="negrita">DÉCIMA SÉPTIMA.-</a>
                <a>La empresa para todos los efectos legales le reconoce al empleado la antigüedad del
                    <b>{{ mb_strtoupper($fecha_inicio_dia) }} DE {{ mb_strtoupper($fecha_inicio_mes) }}
                        @if($fecha_inicio_year <= 1999) DE @else DEL @endif {{ mb_strtoupper($fecha_inicio_year) }}.</b>
                            </a> </p> @endif <p class="arial margen-estandar t-letra" style=" margin-bottom:-0.5px;">
                            <span class="tab"></span>
                            <a>Las partes con libre voluntad firman el presente contrato de trabajo en los términos y
                                condiciones
                                que han leído y
                                expresado su conformidad, sometiéndose el patrón a respetar que el mismo no contenga
                                renuncia de
                                derechos del trabajador
                                en términos del artículo 5 de la Ley Federal del Trabajo y el trabajador a respetar el
                                contenido del
                                mismo, el trabajo
                                contratado en la manera y términos señalados. Lo anterior se firma con fecha</a>
                            <b>{{ mb_strtoupper($fecha_inicial_contrato_dia) }} DE
                                {{ mb_strtoupper($fecha_inicial_contrato_mes) }} DEL
                                {{ mb_strtoupper($fecha_inicial_contrato_year) }}.</b> </p> <br>
            <br>
            <p class="arial margen-estandar t-letra" style=" margin-bottom:-0.5px;">
                <table style="width:100%">
                    <tr>
                        <th style="text-align: center;">PATRÓN <br>
                            INDUSTRIAS TECNOS, S.A. DE C.V.</th>
                        <th style="text-align: center;">TRABAJADOR</th>
                    </tr>
                    <tr>
                        <td class="negrita" style="text-align: center;"><br><br>
                            _____________________________________ <br>
                            EDUARDO S. YÁÑEZ PONCE DE LEÓN</td>
                        <td class="negrita" style="text-align: center;"><br><br>
                            _____________________________________ <br>
                            {{ mb_strtoupper($infoColaborador[0]->nombre_desc) }}
                        </td>
                    </tr>
                </table>
            </p>
        </div>
    </div>
</body>

</html>
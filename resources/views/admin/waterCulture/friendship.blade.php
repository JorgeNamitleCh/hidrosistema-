@extends('admin.layouts.masterComplete')

@section('title', 'Hidrosistema | Disponibilidad del agua')

@section('styles')
    @parent

@stop

@section('scrips')
    
@stop
@section('content')
    <!-- page intro -->
    <div class="page-intro">
        <div class="pic" style="background-image: url({{ asset('assets/pic/intro/amistad_a.png') }})"></div>
        
        <div class="grid-row clearfix">
            <div class="page-title">CULTURA DEL AGUA</div>
            <div class="page-subtitle">PROGRAMA AMISTAD CON EL AGUA</div>
            <div class="bread-crumbs"><a href="#">Inicio</a> - Amistad con el agua </div>
        </div>
    </div>
    <!--/ page intro -->
    <!-- page content section -->
    <div class="page-content-section">

        <br><br>
        <div class="grid-row">
            <div class="col-md-6 mb-r animated zoomIn">
                <!--Excerpt-->
                <h1 class="text_h1">Cultura del agua</h1>
                <p  class="format_text">Es un conjunto de costumbres, valores, actitudes y hábitos que un individuo o una sociedad tienen con respecto a la importancia del agua para el desarrollo de todo ser vivo, la disponibilidad del recurso en su entorno y las acciones necesarias para obtenerla, distribuirla, desalojarla, limpiarla y reutilizarla.</p>

            </div>
            <div class="col-md-6 mb-r animated zoomIn">
                <h1 class="text_h1">Programa "amistad con el agua"</h1>
                <p  class="format_text">Este programa esta dirigido principalmente al estudiantado infantil y juvenil del Municipio de Córdoba y tiene como objetivo propiciar y promover la conciencia, el aprecio, el conocimiento y la necesidad del cuidado del recurso agua.</p>
            </div>
        </div>
        <div class="grid-row">
            <div class="col-md-6 mb-r animated zoomIn">
                <h1 class="text_h1">En que consiste:</h1>
                <p  class="format_text">Se realizan visitas permanentes durante todo el ciclo escolar a instituciones educativas, efectuando pláticas, proyección de videos, talleres y actividades en relación al tema del agua y el medio ambiente. <br><br>

                El programa también contempla la difusión de la cultura del agua a los padres de familia, maestros, empresarios y sociedad en general, mediante pláticas en colonias, concursos, campañas informativas en diferentes medios de comunicación, buscando que la sociedad se involucre en aportar soluciones y acciones para el cuidado del vital líquido. <br><br>

                El programa Amistad con el Agua ha llegado también a las comunidades aledañas al municipio, involucrando a niños, jóvenes y adultos.</p>
            </div>
            <div class="col-md-6 mb-r animated zoomIn">
                <div class="view hm-zoom">
                    <img src="{{ asset('assets/pic/intro/a_amistad.png') }}" class="img-fluid " alt="">
                </div>
            </div>
        </div>
        <div class="grid-row">
            <div class="block-head block-head-2"><i></i></div>
            <div class="col-md-6 mb-r animated zoomIn">
                <h1 class="text_h1">Temas de estudio</h1>
                <p  class="format_text">
                1.- ¿QUIÉN NECESITA EL AGUA?<br>
                La importancia del agua para los seres vivos y en los asentamientos humanos a través de la historia hasta os tiempos actuales.
                <br><br>
                2.- ¿QUE ES EL AGUA? <br>
                Estados y propiedades físicas del agua
                <br><br>
                3.- ¿CÓMO SE FORMAN LAS NUBES?<br>
                Ciclo hidrológico
                <br><br>
                4.- ¿DE DÓNDE LLEGA EL AGUA QUE LLEGA A CÓRDOBA? <br>
                Fuentes de abastecimiento 
                <br><br>
                5.- ¿CÓMO LLEGA EL AGUA EN TU CASA? <br>
                Captación, tratamiento y conducción.
                <br><br>
                6.- ¿CÓMO CUIDAS EL AGUA EN TU CASA? <br>
                Uso racional del agua
                <br><br>
                7.- EL AGUA ES VIDA, NO LA ENFERMES <br>
                Contaminación del agua</p>
            </div>
            <div class="col-md-6 mb-r animated zoomIn">
                <h1 class="text_h1">Temas complementarios</h1>
                <p  class="format_text">A)  El dengue. Como prevenir las enfermedades transmitidas por el agua. <br> <br>
                B)  Los bosques y selvas, fábricas de agua. <br><br>
                C)  Aguas con tu basura. Separación de residuos. <br> <br>                                                          
                D)  Medidor de agua, mide tu consumo de agua. <br><br>
                E)  Expresagua. Expresa tu sentir acerca del agua a través del arte. <br><br>
                F)  Prevención de desastres-Medidas de prevención de los desastres naturales.</p>
            </div>
        </div>
        <div class="grid-row">
            <br><br><br>
        </div>
    </div>
    <!--/ page content section -->
@stop
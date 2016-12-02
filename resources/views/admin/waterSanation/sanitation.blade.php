@extends('admin.layouts.masterComplete')

@section('title', 'Hidrosistema | Información')

@section('styles')

    @parent
@stop

@section('scrips')
	
@stop
@section('content')
	<!-- page intro -->
	<div class="page-intro">
		<div class="pic" style="background-image: url({{ asset('assets/pic/intro/puente.png') }})"></div>
		
		<div class="grid-row clearfix">
			<div class="page-title">AGUA Y SANEAMIENTO</div>
			<div class="page-subtitle">SANEAMIENTO</div>
			<div class="bread-crumbs"><a href="{{ url('/') }}">Inicio</a> - Saneamiento </div>
		</div>
	</div>
	<!--/ page intro -->
	<!-- page content section -->
	<div class="page-content-section">
		<div class="grid-row">
            <div class="col-md-8 mb-r animated zoomIn">
                <h1 class="text_h1">SANEAMIENTO</h1>
                <p  class="format_text">Uno de los principales problemas que tiene la ciudad de Córdoba, es la contaminación de los cuerpos de agua que cruzan por ella. Actualmente, los ríos San Antonio y Seco que cruzan la ciudad de Córdoba y 14 arroyos más, funcionan como colectores a cielo abierto de aguas residuales. 

				Para dar solución a ésta problemática, se elaboró un estudio el cual contempla la planeación detallada para rescatar los cuerpos de agua de la ciudad de Córdoba, como inicio Hidrosistema de Córdoba pretende este año terminar los proyectos ejecutivos para rehabilitar dos plantas de tratamiento de aguas residuales ya existentes, la de CECADYS y San Román. <br><br>

				Se ha implementado ya un programa de control de descargas, con la rehabilitación de los colectores de aguas residuales del arroyo Los Lirios y el San Antonio en la parte alta. <br><br>

				Se tiene también concluido el estudio de Ingeniería Básica para la Planta de Tratamiento de Agua de Residuales más importante que requiere la ciudad de Córdoba, misma que tratará 500 litros por segundo.  <br><br>

				Contando con el apoyo del Gobierno del Estado se han construido los colectores marginales del Río San Antonio y de los Arroyos Toribio y Barranca Honda, con una longitud total de 5.73 kilómetros. <br><br>

				Los fraccionadores están obligados a presentar proyectos de drenaje sanitario y pluvial. En el sentido estricto de no contaminar más nuestros cuerpos federales de agua, se le solicita el cumplimiento de la NOM-001-SEMARNAT-1996 si van a descargar a cuerpo federal y la NOM-002-SEMARNAT-1996 si descarga a nuestra red de alcantarillado sanitario.</p>
            </div>
            <div class="col-md-4 mb-r animated zoomIn">
                <div class="view hm-zoom">
                    <img src="{{ asset('assets/pic/intro/rios.png') }}" class="img-fluid " alt="">
                </div>
            </div>
        </div>
		<div class="grid-row">
            <br><br><br>
        </div>
	</div>
	<!--/ page content section -->

@stop
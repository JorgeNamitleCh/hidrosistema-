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
		<div class="pic" style="background-image: url({{ asset('assets/pic/intro/calidad_a.png') }})"></div>
		
		<div class="grid-row clearfix">
			<div class="page-title">AGUA Y SANEAMIENTO</div>
			<div class="page-subtitle">CONTROL Y CALIDAD DEL AGUA</div>
			<div class="bread-crumbs"><a href="{{ url('/') }}">Inicio</a> - Control y calidad del agua</div>
		</div>
	</div>
	<!--/ page intro -->
	<!-- page content section -->
	<div class="page-content-section">
		<div class="grid-row">
            <div class="col-md-8 mb-r animated zoomIn">
                <h1 class="text_h1">DEPARTAMENTO DE CONTROL Y CALIDAD DEL AGUA</h1>
                <p  class="format_text">
				El control de la calidad del agua puede definirse como el conjunto de actividades que se ejercen en forma continua con el objetivo de verificar que la calidad de agua suministrada cumpla con las leyes y normas vigentes. <br><br>

				El control de la calidad implica una combinación de mantenimiento preventivo y de buenas practicas operativas, apoyado por la evaluación continua de la calidad de las fuentes, de los procesos de tratamiento y del sistema de distribución, conjuntamente con las inspecciones sanitarias, lo cual asegura la buena calidad del agua en el sistema de distribución. <br><br>

				La buena calidad del agua para uso y consumo humano asegura al consumidor su protección contra la presencia de agentes patógenos y compuestos físicos y químicos perjudiciales para la salud. <br><br>

				La información que proveen los programas de vigilancia y control del agua para uso y consumo humano, aparte del beneficio relacionado con la disminución de enfermedades transmitidas por la vía hídrica, es un medio que permite el mejoramiento de la calidad del servicio de abastecimiento de agua.</p>
            </div>
            <div class="col-md-4 mb-r animated zoomIn">
                <div class="view hm-zoom">
                    <img src="{{ asset('assets/pic/intro/calidad_a.jpg') }}" class="img-fluid " alt="">
                </div>
            </div>
        </div>
		<div class="grid-row">
            <br><br><br>
        </div>
	</div>
	<!--/ page content section -->

@stop
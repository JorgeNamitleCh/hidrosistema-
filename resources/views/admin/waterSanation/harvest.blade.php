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
		<div class="pic" style="background-image: url({{ asset('assets/pic/intro/cosechando.png') }})"></div>
		
		<div class="grid-row clearfix">
			<div class="page-title">AGUA Y SANEAMIENTO</div>
			<div class="page-subtitle">COSECHANDO AGUA</div>
			<div class="bread-crumbs"><a href="{{ url('/') }}">Inicio</a> - Cosechando agua</div>
		</div>
	</div>
	<!--/ page intro -->
	<!-- page content section -->
	<div class="page-content-section">
		<div class="grid-row">
            <div class="col-md-8 mb-r animated zoomIn">
                <h1 class="text_h1">COSECHANDO AGUA DE LLUVIA</h1>
                <p  class="format_text">
				El agua pluvial es un recurso que debemos aprovechar como una fuente de abastecimiento. La captación de agua pluvial es un componente importante para el manejo integral y adecuado del recurso hídrico. <br><br>

				El Sistema de Captación Pluvial denominado “Cosechando Agua de Lluvia” pretende la captación y abastecimiento de agua para satisfacer las necesidades de las comunidades marginadas, con la construcción de estos sistemas en las Escuelas Miguel Hidalgo, de la comunidad Francisco I. Madero y Emiliano Zapata, de la comunidad San Aparicio, se ha logrado satisfacer las necesidades propias de la escuela y en ocasiones, las necesidades de algunos ciudadanos de la propia comunidad.</p>
            </div>
            <div class="col-md-4 mb-r animated zoomIn">
                <div class="view hm-zoom">
                    <img src="{{ asset('assets/pic/intro/lluvia.png') }}" class="img-fluid " alt="">
                </div>
            </div>
        </div>
		<div class="grid-row">
            <br><br><br>
        </div>
	</div>
	<!--/ page content section -->

@stop
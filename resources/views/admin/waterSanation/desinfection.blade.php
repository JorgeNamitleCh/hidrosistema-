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
		<div class="pic" style="background-image: url({{ asset('assets/pic/intro/tubos.jpg') }})"></div>
		
		<div class="grid-row clearfix">
			<div class="page-title">AGUA Y SANEAMIENTO</div>
			<div class="page-subtitle">DESINFECCIÓN</div>
			<div class="bread-crumbs"><a href="{{ url('/') }}">Inicio</a> - Desinfección </div>
		</div>
	</div>
	<!--/ page intro -->
	<!-- page content section -->
	<div class="page-content-section">
		<div class="grid-row">
            <div class="col-md-7 mb-r animated zoomIn">
                <h1 class="text_h1">DESINFECCIÓN Y DISTRIBUCIÓN</h1>
                <p  class="format_text">Hidrosistema de Córdoba cuenta, con 3 tanques de captación y 14 tanques de distribución con una capacidad total de 15,160 metros cúbicos. <br><br>

				Hidrosistema realiza la desinfección del agua que proviene de las fuentes de abastecimiento garantizando un cloro residual en la red de distribución, al final de ella desinfectando un 100 % del agua que se suministra a los usuarios, cumpliendo con las Normas NOM - 127 –SSA1-1994 "Salud ambiental, agua para uso y consumo humano-límites permisibles de calidad y tratamientos a que debe someterse el agua para su potabilización” y NOM –179- SSA1 –1998 “ Vigilancia y evaluación del control de calidad del agua para uso y consumo humano distribuida por sistemas de abastecimiento públicos, en las que se indica el cumplimiento, tipo de análisis, la frecuencia y puntos de muestreo. <br><br>

				Actualmente el 70 % de la población cordobesa recibe el servicio de agua potable en forma continua y al resto de la población se le proporciona el servicio en forma tandeada. <br><br>

				La cobertura de agua potable en la zona urbana es del 98 %, faltando infraestructura únicamente en asentamientos irregulares. <br><br>

				En la zona rural, la cobertura de agua potable es del orden del 90 % sin embargo se está elaborado un Proyecto Ejecutivo para dotar agua a las localidades que aún no cuentan con el servicio.</p>
            </div>
            <div class="col-md-5 mb-r animated zoomIn">
                <div class="view hm-zoom">
                    <img src="{{ asset('assets/pic/intro/tratamiento.png') }}" class="img-fluid " alt="">
                </div>
            </div>
        </div>
		<div class="grid-row">
            <br><br><br>
        </div>
	</div>
	<!--/ page content section -->

@stop
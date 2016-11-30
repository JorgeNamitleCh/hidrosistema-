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
		<div class="pic" style="background-image: url({{ asset('assets/pic/intro/information.png') }})"></div>
		
		<div class="grid-row clearfix">
			<div class="page-title">SERVICIOS</div>
			<div class="page-subtitle">INFORMACIÓN</div>
			<div class="bread-crumbs"><a href="#">Inicio</a> - Información </div>
		</div>
	</div>
	<!--/ page intro -->
	<!-- page content section -->
	<div class="page-content-section">
		<div class="grid-row">
			<div class="col-md-6">
				<div class="list-group">
				  	<a href="{{ asset('storage/information/tarifas2016.pdf') }}" target="_blank" class="list-group-item"> <style type="text/css"> .fa-lg{color: #ff4444;}</style>
				    	<h4 class="list-group-item-heading"><i class="fa fa-file-pdf-o pdf fa-lg "></i> Tarifas 2016.pdf</h4>
				    	<p class="list-group-item-text">Muestra el desglose de las tarifas.</p>
				  	</a>
				  	<a href="{{ asset('storage/information/medidor.pdf') }}" target="_blank" class="list-group-item">
				    	<h4 class="list-group-item-heading"><i class="fa fa-file-pdf-o pdf fa-lg "></i> Conozca se medidor.pdf</h4>
				    	<p class="list-group-item-text">Información refrente al medidor y toma de lecturas.</p>
				  	</a>
				  	<a href="{{ asset('storage/information/factibilidades.pdf') }}" target="_blank" class="list-group-item">
				    	<h4 class="list-group-item-heading"><i class="fa fa-file-pdf-o pdf fa-lg "></i> Factibilidad.pdf</h4>
				    	<p class="list-group-item-text">Factibilidades</p>
				  	</a>
				  	<a href="{{ asset('storage/information/solicitud-factibilidad.pdf') }}" target="_blank" class="list-group-item">
				    	<h4 class="list-group-item-heading"><i class="fa fa-file-pdf-o pdf fa-lg "></i> Solicitud de Factibilidad.pdf</h4>
				    	<p class="list-group-item-text">Solicitud para fatibilidad</p>
				  	</a>
				  	<a href="{{ asset('storage/information/rfc.pdf') }}" target="_blank" class="list-group-item">
				    	<h4 class="list-group-item-heading"><i class="fa fa-file-pdf-o pdf fa-lg "></i> Información fiscal.pdf</h4>
				    	<p class="list-group-item-text">Informacion fiscal de Hidrosistema de Córdoba.</p>
				  	</a>
				  	<a href="{{ asset('storage/information/panticipado.pdf') }}" target="_blank" class="list-group-item">
				    	<h4 class="list-group-item-heading"><i class="fa fa-file-pdf-o pdf fa-lg "></i> Pago anual anticipado.pdf</h4>
				    	<p class="list-group-item-text">Conoce el pago anual anticipado</p>
				  	</a>
				</div>
			</div>
			<div class="col-md-6">
				<a href="{{ asset('storage/information/laboratorio.pdf') }}" target="_blank" class="list-group-item">
			    	<h4 class="list-group-item-heading"><i class="fa fa-file-pdf-o pdf fa-lg "></i> Servicio de Laboratorio.pdf</h4>
			    	<p class="list-group-item-text">Conoce nustro servicio.</p>
			  	</a>
			</div>	
		</div>
		<div class="grid-row">
			<br><br><br>
		</div>
	</div>
	<!--/ page content section -->

@stop
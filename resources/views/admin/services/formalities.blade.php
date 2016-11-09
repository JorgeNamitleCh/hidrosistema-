@extends('admin.layouts.masterComplete')

@section('title', 'Hidrosistema | Directorio')

@section('styles')
    @parent
@stop

@section('scrips')
	
@stop
@section('content')
	<!-- page intro -->
	<div class="page-intro">
		<div class="pic" style="background-image: url({{ asset('assets/pic/intro/tramite.jpg') }})"></div>
		
		<div class="grid-row clearfix">
			<div class="page-title">SERVICIOS</div>
			<div class="page-subtitle">TRAMITES</div>
			<div class="bread-crumbs"><a href="#">Inicio</a> - Tramites </div>
		</div>
	</div>
	<!--/ page intro -->
	<!-- page content section -->
	<div class="page-content-section">
		
		<div class="grid-row">
			<div class="col-md-6">
				<div class="list-group"> <style type="text/css"> .fa-lg{color: #ff4444;}</style>
				  	<a href="{{ asset('storage/formalities/rcontratacion_uso_domestico.pdf') }}"  target="_blank" class="list-group-item">
					    <h4 class="list-group-item-heading"><i target="_blank"class="fa fa-file-pdf-o pdf fa-lg"></i> Requisitos de contratación - Domestico.pdf</h4>
					    <p class="list-group-item-text">Requisitos para la contratación del servicio de uso domestico.</p>
					 </a>
				  	<a href="{{ asset('storage/formalities/rcontratacion_uso_comercial.pdf') }}" target="_blank" class="list-group-item">
				    	<h4 class="list-group-item-heading"><i target="_blank"class="fa fa-file-pdf-o pdf fa-lg "></i> Requisitos de contratación - Comercial.pdf</h4>
				    	<p class="list-group-item-text">Requisitos para la contratación del servicio de uso Comercial.</p>
				 	 </a>
				  	<a href="{{ asset('storage/formalities/rcontratacion_uso_industrial.pdf') }}" target="_blank" class="list-group-item">
				    	<h4 class="list-group-item-heading"><i target="_blank"class="fa fa-file-pdf-o pdf fa-lg "></i> Requisitos para la contratación - Industrial.pdf</h4>
				    	<p class="list-group-item-text">Requisitos para la contratación del servicio de uso industrial.</p>
				  	</a>
				  	<a href="{{ asset('storage/formalities/cambio_nombre.pdf') }}" target="_blank" class="list-group-item">
				    	<h4 class="list-group-item-heading"><i target="_blank"class="fa fa-file-pdf-o pdf fa-lg "></i> Solicitud de cambio de nombre.pdf</h4>
				    	<p class="list-group-item-text"> Para cambiar el nombre del contrato del servicio.</p>
				  	</a>
				  	<a href="{{ asset('storage/formalities/reubicar_toma.pdf') }}" target="_blank" class="list-group-item">
				    	<h4 class="list-group-item-heading"><i target="_blank"class="fa fa-file-pdf-o pdf fa-lg "></i> Solicitud de reubicación de toma.pdf</h4>
				    	<p class="list-group-item-text">Reubicación de toma del servicio.</p>
				  	</a>
				  	<a href="{{ asset('storage/formalities/bajas.pdf') }}" target="_blank" class="list-group-item">
				    	<h4 class="list-group-item-heading"><i target="_blank"class="fa fa-file-pdf-o pdf fa-lg "></i> Solicitud de baja temporal ó definitiva.pdf</h4>
				    	<p class="list-group-item-text">Dar de baja el servicio de forma temporal o permanente.</p>
				  	</a>
				  	<a href="{{ asset('storage/formalities/p-contratistas2016.pdf') }}" target="_blank" class="list-group-item">
				    	<h4 class="list-group-item-heading"><i target="_blank"class="fa fa-file-pdf-o pdf fa-lg "></i> Inscripción al padrón de contratistas.pdf</h4>
				    	<p class="list-group-item-text">Para darse de alta como contratista de hidrosistema de Córdoba.</p>
				  	</a>
				  	<a href="{{ asset('storage/formalities/p-proveedores2016.pdf') }}" target="_blank" class="list-group-item">
				    	<h4 class="list-group-item-heading"><i target="_blank"class="fa fa-file-pdf-o pdf fa-lg "></i> Inscripción al padrón de Proveedores.pdf</h4>
				    	<p class="list-group-item-text">Para darse de alta como Proveedor de hidrosistema de Córdoba.</p>
				  	</a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="list-group">
				  	<a href="{{ asset('storage/formalities/p_anticipado.pdf') }}" target="_blank" class="list-group-item">
				    	<h4 class="list-group-item-heading"><i class="fa fa-file-pdf-o pdf fa-lg "></i> Pago Anticipado.pdf</h4>
				    	<p class="list-group-item-text">Informate.</p>
				  	</a>
				  	<a href="{{ asset('storage/formalities/prefact.pdf') }}" target="_blank" class="list-group-item">
				    	<h4 class="list-group-item-heading"><i class="fa fa-file-pdf-o pdf fa-lg "></i> Requisitos Pre-factibilidades.pdf</h4>
				    	<p class="list-group-item-text">Requisitos.</p>
				  	</a>
				  	<a href="{{ asset('storage/formalities/pre_factibilidad.pdf') }}" target="_blank" class="list-group-item">
				    	<h4 class="list-group-item-heading"><i class="fa fa-file-pdf-o pdf fa-lg "></i> Factibilidad.pdf</h4>
				    	<p class="list-group-item-text">Factibilidades</p>
				  	</a>
				  	<a href="{{ asset('storage/formalities/tramite_fact.pdf') }}" target="_blank" class="list-group-item">
				    	<h4 class="list-group-item-heading"><i class="fa fa-file-pdf-o pdf fa-lg "></i> Requisitos Factibilidad.pdf</h4>
				    	<p class="list-group-item-text">Requisitos factibilidad personas Fisicas y Morales</p>
				  	</a>
				  	<a href="{{ asset('storage/formalities/solicitud-factibilidad.pdf') }}" target="_blank" class="list-group-item">
				    	<h4 class="list-group-item-heading"><i class="fa fa-file-pdf-o pdf fa-lg "></i> Solicitud del tramite de factibilidad.pdf</h4>
				    	<p class="list-group-item-text">ramite de factibilidad</p>
				  	</a>
				</div>
			</div>
		</div>
		<div class="grid-row">
			<br><br><br>
		</div>
	</div>
	<!--/ page content section -->

@stop
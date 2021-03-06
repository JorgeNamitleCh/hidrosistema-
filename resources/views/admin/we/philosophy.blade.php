@extends('admin.layouts.masterComplete')

@section('title', 'Hidrosistema')

@section('styles')
    @parent
@stop

@section('scrips')
	
@stop
@section('content')
		
	<!-- page intro -->
	<div class="page-intro">
		<div class="pic" style="background-image: url({{ asset('assets/pic/intro/about.png') }})"></div>
		
		<div class="grid-row clearfix">
			<div class="page-title">NOSOTROS</div>
			<div class="page-subtitle">Filosofía institucional</div>
			<div class="bread-crumbs"><a href="{{ url('/') }}">Inicio</a> - Filosofía </div>
		</div>
	</div>
	<!--/ page intro -->
	
	<!-- page content -->
	<div class="page-content">				
		<!-- page content section -->
		<div class="page-content-section">
			<div class="grid-row">
				<!-- about -->
				<div class="block block-about-5">
					<div class="block-cont clearfix">
						<div class="grid-col grid-col-6 animated zoomIn">
							<h1 class="text_h2">¿QUIENES SOMOS?</h1 class="text_h2">
							<dl class="accordion">
								<dt class="active"><i class="fa fa-plus"></i>Misión</dt>
								<dd>
									<p class="format_text">Suministrar a los habitantes de la Ciudad de Córdoba de servicios de agua potable y saneamiento, con la calidad, cantidad y continuidad que se demande, gestionando de manera eficaz los recursos hídricos e instalaciones con que cuenta el Organismo y fomentando la cultura del agua y el cumplimiento a los requerimientos legales aplicables. </p>
								</dd>
								<dt><i class="fa fa-plus"></i>Visión</dt>
								<dd>
									<p class="format_text">Ser un organismo operador con desarrollo sustentable, líder en la calidad y la eficiencia de servicios de agua potable y saneamiento, dotando de valor a nuestros procesos, a través de la gestión de recursos que satisfagan las necesidades del cliente. </p>
								</dd>
								<dt><i class="fa fa-plus"></i>Valores</dt>
								<dd>
									<h4>*SERVICIO</h4>
									<h4>*LEALTAD</h4>
									<h4>*CALIDAD</h4>
									<h4>*ÉTICA</h4>
								</dd>
							</dl>
						</div>
						<div class="grid-col grid-col-6 animated zoomIn">
							<h1 class="text_h2">POLÍTICA DE CALIDAD</h1 class="text_h2">
							<p class="format_text">Otorgar al usuario un servicio con calidad y calidez, desarrollando en todo momento nuestras actividades de manera honesta y ética, apegados a los procedimientos y métodos de trabajo que permitan cubrir las necesidades de nuestros clientes, con el único objetivo de asegurar su satisfacción y una relación de servicio mutuamente beneficiosa. </p>
							<div class="owl-slideshow">
							  <div><img src="{{ asset('assets/pic/about/about-s1.jpg') }}" width="570" height="210" alt=""></div>
							  <div><img src="{{ asset('assets/pic/about/about-s2.jpg') }}" width="570" height="210" alt=""></div>
							  <div><img src="{{ asset('assets/pic/about/about-s3.jpg') }}" width="570" height="210" alt=""></div>
							</div>
						</div>
					</div>
					
				</div>
				<!--/ about -->
			</div>
		</div>
		<!--/ page content section -->
	</div>
	<!--/ page content -->
									
@stop
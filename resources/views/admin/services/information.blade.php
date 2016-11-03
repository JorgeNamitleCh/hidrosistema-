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
		<div class="pic" style="background-image: url({{ asset('assets/pic/intro/carp.jpg') }})"></div>
		
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
			<div class="col-md-8">
				<div class="search-results search-file">
					<!-- Addclass "list-striped" to ul element if you want to list rows with stripe colors -->
					<ul class="search-list list-hover">
						<li>
							<div class="file-icon"><a href="#"><i class="fa fa-file-pdf-o pdf"></i></a></div><!--.file-icon-->
							<div class="search-result">
								<h6><a href="#">Tarifas 2016.pdf</a></h6>
								<p class="source"><a href="#">Muestra el desglose de las tarifas</a></p>
								<ul class="list-inline">
									<li>10.1MB</li>
								</ul>
							</div><!--.search-result-->
						</li>
						<li>
							<div class="file-icon"><a href="#"><i class="fa fa-file-pdf-o pdf"></i></a></div><!--.file-icon-->
							<div class="search-result">
								<h6><a href="#">Conozca se medidor.pdf</a></h6>
								<p class="source"><a href="#">Información refrente al medidor y toma de lecturas</a></p>
								<ul class="list-inline">
									<li>4.3MB</li>
								</ul>
							</div><!--.search-result-->
						</li>
						<li>
							<div class="file-icon"><a href="#"><i class="fa fa-file-pdf-o pdf"></i></a></div><!--.file-icon-->
							<div class="search-result">
								<h6><a href="#">Información fiscal.pdf</a></h6>
								<p class="source"><a href="#">Informacion fiscal de Hidrosistema de Córdoba</a></p>
								<ul class="list-inline">
									<li>2.9MB</li>
								</ul>
							</div><!--.search-result-->
						</li>
						<li>
							<div class="file-icon"><a href="#"><i class="fa fa-file-pdf-o pdf"></i></a></div><!--.file-icon-->
							<div class="search-result">
								<h6><a href="#">Pago anual anticipado.pdf</h6>
								<p class="source"><a href="#">Conoce el pago anual anticipado</a></p>
								<ul class="list-inline">
									<li>5.6MB</li>
								</ul>
							</div><!--.search-result-->
						</li>
					</ul>
				</div><!--.search-results-->
			</div>
		</div>
	</div>
	<!--/ page content section -->

@stop
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
				<div class="search-results search-file">
					<!-- Addclass "list-striped" to ul element if you want to list rows with stripe colors -->
					<ul class="search-list list-hover">
						<li>
							<div class="file-icon"><a href="#"><i class="fa fa-file-pdf-o pdf"></i></a></div><!--.file-icon-->
							<div class="search-result">
								<h6><a href="#">Requisitos de contratación - Domestico.pdf</a></h6>
								<p class="source"><a href="#">Requisitos para la contratación del servicio de uso domestico</a></p>
								<ul class="list-inline">
									<li>10.1MB</li>
								</ul>
							</div><!--.search-result-->
						</li>
						<li>
							<div class="file-icon"><a href="#"><i class="fa fa-file-pdf-o pdf"></i></a></div><!--.file-icon-->
							<div class="search-result">
								<h6><a href="#">Requisitos de contratación - Comercial - Personas Morales.pdf</a></h6>
								<p class="source"><a href="#">Requisitos para la contratación del servicio de uso Comercial y/o  personas Morales</a></p>
								<ul class="list-inline">
									<li>4.3MB</li>
								</ul>
							</div><!--.search-result-->
						</li>
						<li>
							<div class="file-icon"><a href="#"><i class="fa fa-file-pdf-o pdf"></i></a></div><!--.file-icon-->
							<div class="search-result">
								<h6><a href="#">Requisitos para la contratación del servicio de uso industrial.pdf</a></h6>
								<p class="source"><a href="#">Requisitos para la contratación del servicio de uso industrial</a></p>
								<ul class="list-inline">
									<li>2.9MB</li>
								</ul>
							</div><!--.search-result-->
						</li>
						<li>
							<div class="file-icon"><a href="#"><i class="fa fa-file-pdf-o pdf"></i></a></div><!--.file-icon-->
							<div class="search-result">
								<h6><a href="#">Solicitud de cambio de nombre.pdf</h6>
								<p class="source"><a href="#">Para cambiar el nombre del contrato del servicio</a></p>
								<ul class="list-inline">
									<li>5.6MB</li>
								</ul>
							</div><!--.search-result-->
						</li>
						<li>
							<div class="file-icon"><a href="#"><i class="fa fa-file-pdf-o pdf"></i></a></div><!--.file-icon-->
							<div class="search-result">
								<h6><a href="#">Solicitud de reubicación de toma.pdf</h6>
								<p class="source"><a href="#">Reubicación de toma del servicio</a></p>
								<ul class="list-inline">
									<li>5.6MB</li>
								</ul>
							</div><!--.search-result-->
						</li>
						<li>
							<div class="file-icon"><a href="#"><i class="fa fa-file-pdf-o pdf"></i></a></div><!--.file-icon-->
							<div class="search-result">
								<h6><a href="#">Solicitud de baja temporal ó definitiva.pdf</h6>
								<p class="source"><a href="#">Dar de baja el servicio de forma temporal o permanente</a></p>
								<ul class="list-inline">
									<li>5.6MB</li>
								</ul>
							</div><!--.search-result-->
						</li>
						<li>
							<div class="file-icon"><a href="#"><i class="fa fa-file-pdf-o pdf"></i></a></div><!--.file-icon-->
							<div class="search-result">
								<h6><a href="#">Inscripción al padrón de contratistas.pdf</h6>
								<p class="source"><a href="#">Para darse de alta como contratista de hidrosistema de Córdoba</a></p>
								<ul class="list-inline">
									<li>5.6MB</li>
								</ul>
							</div><!--.search-result-->
						</li>
						<li>
							<div class="file-icon"><a href="#"><i class="fa fa-file-pdf-o pdf"></i></a></div><!--.file-icon-->
							<div class="search-result">
								<h6><a href="#">Inscripción al padrón de Proveedores.pdf</h6>
								<p class="source"><a href="#">Para darse de alta como Proveedor de hidrosistema de Córdoba</a></p>
								<ul class="list-inline">
									<li>5.6MB</li>
								</ul>
							</div><!--.search-result-->
						</li>
					</ul>
				</div><!--.search-results-->
			</div>
			<div class="col-md-6">
				<div class="search-results search-file">
					<!-- Addclass "list-striped" to ul element if you want to list rows with stripe colors -->
					<ul class="search-list list-hover">
						<li>
							<div class="file-icon"><a href="#"><i class="fa fa-file-pdf-o pdf"></i></a></div><!--.file-icon-->
							<div class="search-result">
								<h6><a href="#">Comite de fatibilidades.pdf</a></h6>
								<p class="source"><a href="#">Conocenos</a></p>
								<ul class="list-inline">
									<li>10.1MB</li>
								</ul>
							</div><!--.search-result-->
						</li>
						<li>
							<div class="file-icon"><a href="#"><i class="fa fa-file-pdf-o pdf"></i></a></div><!--.file-icon-->
							<div class="search-result">
								<h6><a href="#">Requisitos Pre-factibilidades.pdf</a></h6>
								<p class="source"><a href="#">Requisitos</a></p>
								<ul class="list-inline">
									<li>4.3MB</li>
								</ul>
							</div><!--.search-result-->
						</li>
						<li>
							<div class="file-icon"><a href="#"><i class="fa fa-file-pdf-o pdf"></i></a></div><!--.file-icon-->
							<div class="search-result">
								<h6><a href="#">Factibilidad.pdf</a></h6>
								<p class="source"><a href="#">Factibilidades</a></p>
								<ul class="list-inline">
									<li>2.9MB</li>
								</ul>
							</div><!--.search-result-->
						</li>
						<li>
							<div class="file-icon"><a href="#"><i class="fa fa-file-pdf-o pdf"></i></a></div><!--.file-icon-->
							<div class="search-result">
								<h6><a href="#">Requisitos Factibilidad.pdf</h6>
								<p class="source"><a href="#">Requisitos factibilidad personas Fisicas y Morales</a></p>
								<ul class="list-inline">
									<li>5.6MB</li>
								</ul>
							</div><!--.search-result-->
						</li>
						<li>
							<div class="file-icon"><a href="#"><i class="fa fa-file-pdf-o pdf"></i></a></div><!--.file-icon-->
							<div class="search-result">
								<h6><a href="#">Solicitud del tramite de factibilidad.pdf</h6>
								<p class="source"><a href="#">Tramite de factibilidad</a></p>
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
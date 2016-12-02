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
		<div class="pic" style="background-image: url({{ asset('assets/pic/intro/nor.jpg') }})"></div>
		
		<div class="grid-row clearfix">
			<div class="page-title">AGUA Y SANEAMIENTO</div>
			<div class="page-subtitle">NORMATIVIDAD</div>
			<div class="bread-crumbs"><a href="{{ url('/') }}">Inicio</a> - Normatividad</div>
		</div>
	</div>
	<!--/ page intro -->
	<!-- page content section -->
	<div class="page-content-section">
		<div class="grid-row">
            <div class="col-md-4 mb-r animated zoomIn">
            	<h1 class="text_h1">NORMATIVIDAD</h1>
                <div class="view hm-zoom">
                    <img src="{{ asset('assets/pic/intro/normativa.png') }}" class="img-fluid " alt="">
                </div>
            </div>
            <div class="col-md-4 mb-r animated zoomIn">
               	<div class="list-group"> <style type="text/css"> .fa-lg{color: #ff4444;}</style>
                    <a href="{{ asset('storage/information/ley_aguas_edo_veracruz.pdf') }}"  target="_blank" class="list-group-item">
                        <h4 class="list-group-item-heading"><i target="_blank"class="fa fa-file-pdf-o pdf fa-lg"></i> Ley número 21.pdf</h4>
                        <p class="list-group-item-text">De aguas del estado de Veracruz</p>
                     </a>
                </div> <br>
                <div class="list-group"> <style type="text/css"> .fa-lg{color: #ff4444;}</style>
                    <a href="{{ asset('storage/information/reglamento-hidrosistema.pdf') }}"  target="_blank" class="list-group-item">
                        <h4 class="list-group-item-heading"><i target="_blank"class="fa fa-file-pdf-o pdf fa-lg"></i> Reglamento interno.pdf</h4>
                        <p class="list-group-item-text">Hidrosistema de Córdoba 16-05-07</p>
                     </a>
                </div> <br>
                <div class="list-group"> <style type="text/css"> .fa-lg{color: #ff4444;}</style>
                    <a href="{{ asset('storage/information/ley-adquisiciones.pdf') }}"  target="_blank" class="list-group-item">
                        <h4 class="list-group-item-heading"><i target="_blank"class="fa fa-file-pdf-o pdf fa-lg"></i> Ley de adquisiciones.pdf</h4>
                        <p class="list-group-item-text">Hidrosistema de Córdoba</p>
                     </a>
                </div>
            </div>
            <div class="col-md-4 mb-r animated zoomIn">
               	<div class="list-group"> <style type="text/css"> .fa-lg{color: #ff4444;}</style>
                    <a href="{{ asset('storage/information/padron-proveedores.pdf') }}"  target="_blank" class="list-group-item">
                        <h4 class="list-group-item-heading"><i target="_blank"class="fa fa-file-pdf-o pdf fa-lg"></i> Proveedores 2016.pdf</h4>
                        <p class="list-group-item-text">Padrón de proveedores 2016</p>
                     </a>
                </div> <br>
                <div class="list-group"> <style type="text/css"> .fa-lg{color: #ff4444;}</style>
                    <a href="{{ asset('storage/information/padron-contratistas.pdf') }}"  target="_blank" class="list-group-item">
                        <h4 class="list-group-item-heading"><i target="_blank"class="fa fa-file-pdf-o pdf fa-lg"></i> Contratistas 2016.pdf</h4>
                        <p class="list-group-item-text">Padron de Contratistas 2016</p>
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
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
		<div class="pic" style="background-image: url({{ asset('assets/pic/intro/directorio.png') }})"></div>
		
		<div class="grid-row clearfix">
			<div class="page-title">NOSOTROS</div>
			<div class="page-subtitle">Directorio</div>
			<div class="bread-crumbs"><a href="{{ url('/') }}">Inicio</a> - Directorio </div>
		</div>
	</div>
	<!--/ page intro -->
	<!-- page content section -->
	<div class="page-content-section">
		<div class="grid-row">
			<!-- services -->
			<div class="block block-services block-services-3 animated zoomIn">
				<h3>Lineas y extenciones telefónicas</h3>
				<div class="block-head block-head-1"><h1 class="text_h1">Números de Atención</h1><i class="fa fa-tint"></i></div>
				<div class="block-cont">
					<ul>
						<li>
							<a href="#"><i class="fa fa-phone"></i></a>
							<h3>01 (271) 717 33 94</h3>
							<p>Hidrosistema de Córdoba</p>
						</li><!--
						--><li>
							<a href="#"><i class="fa fa-phone-square"></i></a>
							<h3>01 (271) 712 55 35</h3>
							<p>Hidrosistema de Córdoba</p>
						</li><!--
						--><li>
							<a href="#"><i class="fa fa-phone"></i></a>
							<h3>01 (271) 712 53 35</h3>
							<p>Hidrosistema de Córdoba</p>
						</li><!--
						--><li>
							<a href="#"><i class="fa fa-phone-square"></i></a>
							<h3>01 (271) 712 71 55</h3>
							<p>Hidrosistema de Córdoba</p>
						</li>
					</ul>
				</div>
			</div>
			<!--/ services -->
		</div>
		<div class="grid-row animated zoomIn">
			<div class="block-head block-head-1"><h1 class="text_h1">Extenciones Telefónicas</h1><i class="fa fa-tint"></i></div>
			<div class="col-md-4">
				<div class="list-group"> 
					<a href="#" class="list-group-item"> 
						<h4 class="list-group-item-heading">Dirección General.</h4> 
						<p class="list-group-item-text">Ext. #208</p> </a> 
					<a href="#" class="list-group-item"> 
						<h4 class="list-group-item-heading">Fax - Dirección.</h4> 
						<p class="list-group-item-text">Ext. #215</p> </a> 
					<a href="#" class="list-group-item"> 
						<h4 class="list-group-item-heading">Contraloría Interna</h4> 
						<p class="list-group-item-text">Ext. #219</p> </a> 
					<a href="#" class="list-group-item"> 
						<h4 class="list-group-item-heading">Unidad de Informática</h4> 
						<p class="list-group-item-text">Ext. #228</p> </a>
					<a href="#" class="list-group-item"> 
						<h4 class="list-group-item-heading">Vigilancia</h4> 
						<p class="list-group-item-text">Ext. #207</p> </a>
					<a href="#" class="list-group-item"> 
						<h4 class="list-group-item-heading">Recursos Humanos</h4> 
						<p class="list-group-item-text">Ext. #224 </p></a>
					<a href="#" class="list-group-item"> 
						<h4 class="list-group-item-heading">IngresosExt. </h4> 
						<p class="list-group-item-text">#223</p> </a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="list-group"> 
					<a href="#" class="list-group-item"> 
						<h4 class="list-group-item-heading">Subdirección Comercial.</h4> 
						<p class="list-group-item-text">Ext. #205</p> </a> 
					<a href="#" class="list-group-item"> 
						<h4 class="list-group-item-heading">Agua Potable y Bacheo.</h4> 
						<p class="list-group-item-text">Ext. #209 </p></a> 
					<a href="#" class="list-group-item"> 
						<h4 class="list-group-item-heading">Unidad de Difusión.</h4> 
						<p class="list-group-item-text">Ext. #213, #220</p> </a>
					<a href="#" class="list-group-item"> 
						<h4 class="list-group-item-heading">Área de Recepción</h4> 
						<p class="list-group-item-text">Ext. #211,  #500</p> </a>
					<a href="#" class="list-group-item"> 
						<h4 class="list-group-item-heading">Información y Ventanillas</h4> 
						<p class="list-group-item-text">Ext. #218</p> </a>
					<a href="#" class="list-group-item"> 
						<h4 class="list-group-item-heading">Servicios Generales</h4> 
						<p class="list-group-item-text">Ext. #222</p> </a>
					<a href="#" class="list-group-item"> 
						<h4 class="list-group-item-heading">Control y Calidad del Agua</h4> 
						<p class="list-group-item-text">Ext. #225</p> </a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="list-group"> 
					<a href="#" class="list-group-item"> 
						<h4 class="list-group-item-heading">Subdirección de Operación y Proyectos.</h4> 
						<p class="list-group-item-text">Ext. #202</p></a> 
					<a href="#" class="list-group-item"> 
						<h4 class="list-group-item-heading">Asistente de Operaciones y Proyectos</h4> 
						<p class="list-group-item-text">Ext. #221</p> </a> 
					<a href="#" class="list-group-item"> 
						<h4 class="list-group-item-heading">Unidad de Innovación.</h4> 
						<p class="list-group-item-text">Ext. #227 </p></a>
					<a href="#" class="list-group-item">
						<h4 class="list-group-item-heading">Control de Rezago</h4> 
						<p class="list-group-item-text">Ext. #206</p> </a>
					<a href="#" class="list-group-item"> 
						<h4 class="list-group-item-heading">Subdirección de Administración y Finanzas </h4> 
						<p class="list-group-item-text">Ext. #203</p> </a>
					<a href="#" class="list-group-item"> 
						<h4 class="list-group-item-heading">Drenaje y Alcantarillado</h4> 
						<p class="list-group-item-text">Ext. #210</p> </a>
					<a href="#" class="list-group-item"> 
						<h4 class="list-group-item-heading">Almacen</h4> 
						<p class="list-group-item-text">Ext. #214</p> </a>
				</div>
			</div>
		</div>
		<div class="grid-row">
            <br><br><br>
        </div>
	</div>
	<!--/ page content section -->

@stop
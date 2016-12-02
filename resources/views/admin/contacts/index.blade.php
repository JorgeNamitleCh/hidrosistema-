
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
		<div class="pic" style="background-image: url({{ asset('assets/pic/intro/disp_agua.jpg') }})"></div>
		
		<div class="grid-row clearfix">
			<div class="page-title">CONTACTO</div>
			<div class="page-subtitle">CONTACTANOS</div>
			<div class="bread-crumbs"><a href="{{ url('/') }}">Inicio</a> - Contacto</div>
		</div>
	</div>
	<!--/ page intro -->
	<!-- page content section -->
	<div class="page-content-section">
		<div class="grid-row">
			<!--Section: Contact v.2-->
			<section class="section">
			    <!--Section heading-->
			    <h1 class="text_h1">CONTACTOs</h1>
			    <!--Section sescription-->
			    <p class="section-description mb-5">Recuerda que puedes enviarnos tus comentarios, quejas y sugerencias , nosotros estamos para antenderte, Hidrosistema de Córdoba</p>

			    <div class="row">

			        <!--First column-->
			        <div class="col-md-8">
			            <form>
			                <!--First row-->
			                <div class="row">
			                    <!--First column-->
			                    <div class="col-md-6">
			                        <div class="md-form">
			                            <div class="md-form">
			                                <input type="text" id="form41" class="form-control">
			                                <label for="form41" class="">Nombre</label>
			                            </div>
			                        </div>
			                    </div>

			                    <!--Second column-->
			                    <div class="col-md-6">
			                        <div class="md-form">
			                            <div class="md-form">
			                                <input type="text" id="form52" class="form-control">
			                                <label for="form52" class="">Correo electronico</label>
			                            </div>
			                        </div>
			                    </div>
			                </div>
			                <!--/.First row-->

			                <!--Second row-->
			                <div class="row">
			                    <div class="col-md-12">
			                        <div class="md-form">
			                            <input type="text" id="form51" class="form-control">
			                            <label for="form51" class="">Asunto</label>
			                        </div>
			                    </div>
			                </div>
			                <!--/Second row-->

			                <!--Third row-->
			                <div class="row">
			                    <!--First column-->
			                    <div class="col-md-12">

			                        <div class="md-form">
			                            <textarea type="text" id="form76" class="md-textarea"></textarea>
			                            <label for="form76">Mensaje</label>
			                        </div>

			                    </div>
			                </div>
			                <!--/.Third row-->
			            </form>

			            <div class="center-on-small-only">
			                <button type="button" class="btn btn-primary" id="gallery_opw">Enviar</button>
			            </div>
			        </div>
			        <!--.First column-->

			        <!--Second column-->
			        <div class="col-md-4">
			            <ul class="contact-icons">
			                <li><i class="fa fa-map-marker fa-2x"></i>
			                    <p>Calle 18 No. 1907, Fracc. Lomas, C. P. 94570.<br>Córdoba, Veracruz.</p>
			                </li>

			                <li><i class="fa fa-phone fa-2x"></i>
			                    <p>(271) 71 255 35 & (271) 71 733 94</p>
			                </li>

			                <li><i class="fa fa-envelope fa-2x"></i>
			                    <p>atenciónausarios@hidrosistema.gob.mx</p>
			                </li>
			            </ul>
			        </div>
			        <!--.Second column-->

			    </div>
			</section>
			<!--/Section: Contact v.2-->
        </div>
		<div class="grid-row">
            <br><br><br>
        </div>
	</div>
	<!--/ page content section -->

@stop
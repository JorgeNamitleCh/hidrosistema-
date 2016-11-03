@extends('admin.layouts.masterComplete')

@section('title', 'Hidrosistema | Información')

@section('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style_cards.css') }}">
    @parent
@stop

@section('scrips')
	<script type="text/javascript" src="{{ asset('assets/js/index_cards.js') }}"></script>
@stop
@section('content')
	<!-- page intro -->
	<div class="page-intro">
		<div class="pic" style="background-image: url({{ asset('assets/pic/intro/services.png') }})"></div>
		
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
			<div class="col-md-4">
				<main id="container">
					  
					  <div class="img-wrapper">
					      <img src="{{ asset('assets/pic/backgrounds/factura.png') }}" alt="Just Background">
					  </div>
					  <p class="detail">Click the Button to see the "Material Animation". Works great on modern browser.</p>

					  <div class="button-wrapper">
					      <div class="layer"></div>
					      <button class="main-button fa fa-info">
					          <div class="ripple"></div>
					      </button>
					  </div>

					  <div class="layered-content">
					      <button class="close-button fa fa-times"></button>
					      <div class="content">
					          <img src="http://s3-us-west-2.amazonaws.com/s.cdpn.io/111167/profile/profile-512_4.jpg" alt="Balapa">
					          <p>Crafted by balapa.</p>
					          <p>See also my <a href="http://codepen.io/balapa/details/gbQbXR/">other pen</a></p>
					      </div>
					  </div>
				</main>
			</div><!-- col-md-4 -->
			<div class="col-md-4">
				<main id="container">
					  
					  <div class="img-wrapper">
					      <img src="{{ asset('assets/pic/backgrounds/consulta.png') }}" alt="Just Background">
					  </div>
					  <p class="detail">Click the Button to see the "Material Animation". Works great on modern browser.</p>

					  <div class="button-wrapper">
					      <div class="layer"></div>
					      <button class="main-button fa fa-info">
					          <div class="ripple"></div>
					      </button>
					  </div>

					  <div class="layered-content">
					      <button class="close-button fa fa-times"></button>
					      <div class="content">
					          <img src="http://s3-us-west-2.amazonaws.com/s.cdpn.io/111167/profile/profile-512_4.jpg" alt="Balapa">
					          <p>Crafted by balapa.</p>
					          <p>See also my <a href="http://codepen.io/balapa/details/gbQbXR/">other pen</a></p>
					      </div>
					  </div>
				</main>
			</div><!-- col-md-4 -->
			<div class="col-md-4">
				<main id="container">
					  
					  <div class="img-wrapper">
					      <img src="{{ asset('assets/pic/backgrounds/saldo.png') }}" alt="Just Background">
					  </div>
					  <p class="detail">Click the Button to see the "Material Animation". Works great on modern browser.</p>

					  <div class="button-wrapper">
					      <div class="layer"></div>
					      <button class="main-button fa fa-info">
					          <div class="ripple"></div>
					      </button>
					  </div>

					  <div class="layered-content">
					      <button class="close-button fa fa-times"></button>
					      <div class="content">
					          <img src="http://s3-us-west-2.amazonaws.com/s.cdpn.io/111167/profile/profile-512_4.jpg" alt="Balapa">
					          <p>Crafted by balapa.</p>
					          <p>See also my <a href="http://codepen.io/balapa/details/gbQbXR/">other pen</a></p>
					      </div>
					  </div>
				</main>
			</div><!-- col-md-4 -->
		</div><!-- grid-row -->
	</div>
	<!--/ page content section -->

@stop
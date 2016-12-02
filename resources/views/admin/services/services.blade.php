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
		<div class="pic" style="background-image: url({{ asset('assets/pic/intro/services_t.png') }})"></div>
		
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
			    <!--Card-->
			    <div class="card card-cascade narrower">
			        <!--Card image-->
			        <div class="view overlay hm-white-slight">
			            <img src="{{ asset('assets/pic/backgrounds/factura.png') }}" class="img-fluid" alt="">
			            <a>
			                <div class="mask"></div>
			            </a>
			        </div>
			        <!--/.Card image-->
			        <!--Card content-->
			        <div class="card-block">
			            <h5 class="red-text"><i class="fa fa-file"></i> Factura</h5>
			            <!--Title-->
			            <h4 class="card-title">Ingresa a nuestro portal!</h4>
			            <!--Text-->
			            <p class="card-text">Orgullosos de servirte, puedes bajar tu factura electronica desde nuestro portal.</p>
			            <a class="btn btn-primary">Ingresa</a>
			        </div>
			        <!--/.Card content-->
			    </div>
			    <!--/.Card-->
			</div>
			<div class="col-md-4">
			    <!--Card-->
			    <div class="card card-cascade narrower">
			        <!--Card image-->
			        <div class="view overlay hm-white-slight">
			            <img src="{{ asset('assets/pic/backgrounds/saldo.png') }}" class="img-fluid" alt="">
			            <a>
			                <div class="mask"></div>
			            </a>
			        </div>
			        <!--/.Card image-->
			        <!--Card content-->
			        <div class="card-block">
			            <h5 class="red-text"><i class="fa fa-search"></i> Saldo Actual</h5>
			            <!--Title-->
			            <h4 class="card-title">Ingresa a nuestro portal!</h4>
			            <!--Text-->
			            <p class="card-text">Orgullosos de servirte, ya puedes consultar tu saldo al día, solo ingresa y registrate.</p>
			            <a class="btn btn-primary">Ingresa</a>
			        </div>
			        <!--/.Card content-->
			    </div>
			    <!--/.Card-->
			</div>
			<div class="col-md-4">
			    <!--Card-->
			    <div class="card card-cascade narrower">
			        <!--Card image-->
			        <div class="view overlay hm-white-slight">
			            <img src="{{ asset('assets/pic/backgrounds/consulta.png') }}" class="img-fluid" alt="">
			            <a>
			                <div class="mask"></div>
			            </a>
			        </div>
			        <!--/.Card image-->
			        <!--Card content-->
			        <div class="card-block">
			            <h5 class="red-text"><i class="fa fa-cloud-download"></i> Recibo</h5>
			            <!--Title-->
			            <h4 class="card-title">Ingresa a nuestro portal!</h4>
			            <!--Text-->
			            <p class="card-text">Orgullosos de servirte, descarga tu recibo y paga en los establecimientos autorizados.</p>
			            <a class="btn btn-primary">Ingresa</a>
			        </div>
			        <!--/.Card content-->
			    </div>
			    <!--/.Card-->
			</div>
		</div><!-- grid-row -->

		<div class="grid-row">
			<div class="col-md-6">
			    <!--Card-->
			    <div class="card card-cascade narrower">
			        <!--Card image-->
			        <div class="view overlay hm-white-slight">
			            <img src="{{ asset('assets/pic/backgrounds/consumo.png') }}" class="img-fluid" alt="">
			            <a>
			                <div class="mask"></div>
			            </a>
			        </div>
			        <!--/.Card image-->
			        <!--Card content-->
			        <div class="card-block">
			            <h5 class="red-text"><i class="fa fa-bars" aria-hidden="true"></i> Consumos</h5>
			            <!--Title-->
			            <h4 class="card-title">Ingresa a nuestro portal!</h4>
			            <!--Text-->
			            <p class="card-text">Orgullosos de servirte, ya puedes consultar tus consumos, solo ingresa y registrate.</p>
			            <a class="btn btn-primary">Ingresa</a>
			        </div>
			        <!--/.Card content-->
			    </div>
			    <!--/.Card-->
			</div>
			<div class="col-md-6">
			    <!--Card-->
			    <div class="card card-cascade narrower">
			        <!--Card image-->
			        <div class="view overlay hm-white-slight">
			            <img src="{{ asset('assets/pic/backgrounds/atencion.png') }}" class="img-fluid" alt="">
			            <a>
			                <div class="mask"></div>
			            </a>
			        </div>
			        <!--/.Card image-->
			        <!--Card content-->
			        <div class="card-block">
			            <h5 class="red-text"><i class="fa fa-users"></i> Atención</h5>
			            <!--Title-->
			            <h4 class="card-title">Ingresa a nuestra página de atención!</h4>
			            <!--Text-->
			            <p class="card-text">Orgullosos de servirte, ponemos a tu disposicion una pagina de atención ciudadana.</p>
			            <a href="http://brigadas.hidrosistema.gob.mx" class="btn btn-primary">Ingresa</a>
			        </div>
			        <!--/.Card content-->
			    </div>
			    <!--/.Card-->
			</div>
		</div><!-- grid-row -->
		<div class="grid-row">
            <br><br><br>
        </div>
	</div>
	<!--/ page content section -->

@stop
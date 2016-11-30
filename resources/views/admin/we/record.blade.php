@extends('admin.layouts.masterComplete')

@section('title', 'Hidrosistema | Antecedentes')

@section('styles')
    @parent
@stop

@section('scrips')
	
@stop
@section('content')
	<!-- page intro -->
	<div class="page-intro">
		<div class="pic" style="background-image: url({{ asset('assets/pic/intro/about-ant.jpg') }})"></div>
		
		<div class="grid-row clearfix">
			<div class="page-title">NOSOTROS</div>
			<div class="page-subtitle">Antecedentes</div>
			<div class="bread-crumbs"><a href="#">Inicio</a> - Antecedentes </div>
		</div>
	</div>
	<!--/ page intro -->
	<!-- page content section -->
		<div class="page-content-section">
			<div class="grid-row">
				<!-- about -->
				<div class="block block-about-6">
					<div class="block-cont clearfix">
						<div class="grid-col grid-col-right grid-col-4 view hm-zoom">
							<img src="{{ asset('assets/pic/about/antec.jpg') }}" width="370" height="310" alt="">
						</div>
						<div class="grid-col grid-col-right grid-col-8 animated zoomIn">
							<h1 class="text_h2">ANTECEDENTES</h1>
							<p class="format_text" ;">Con toda seguridad los primeros asentamientos humanos en lo que hoy conocemos cómo la ciudad de Córdoba, se dieron en las proximidades de las márgenes de los Ríos Seco y San Antonio.<br><br>
La abundancia de agua dio pauta para el crecimiento de las tribus y/o culturas que poblaron las tierras de lo que ahora es el Municipio de Córdoba.<br><br>
En los años posteriores a la conquista, en los albores del siglo XVII, cuando tan en moda estaba la fundación de villas españolas, se idea crear, en 1618, la Villa de Córdoba en el paraje denominado Quilanco, perteneciente a la Jurisdicción de Zacatepec.<br><br>
El abastecimiento del vital en la naciente villa se obtenía a través de la canalización de escurrimientos de agua, que era conducida a depósitos ubicados en vecindades o lugares comunes como los tradicionales lavaderos públicos. <br><br>
Fue hasta finales del siglo XIX , durante el Porfiriato, cuando se construyó el primer sistema formal de abastecimiento de agua, al captarse agua del Río Seco. Este aprovechamiento de agua superficial data de cien años atrás, el agua que se capta era conducida por gravedad a través de un acueducto de tubería de diámetros 12 a 18 pulgadas de barro vitrificado de 10 km de longitud, este tipo de material anteriormente no se fabricaba en el país por lo que toda la tubería fue transportada desde Europa; el agua llegaba a unos filtros rellenos de material filtrante (arena silica y antracita) que era lo que eliminaba las impurezas que traía, posteriormente por falta de conocimientos de los antiguos encargados, los filtros fueron removidos quedando solamente los tanques para el almacenamiento del agua.<br><br>
El crecimiento de la ciudad obligó a buscar nuevas fuentes de abastecimiento para atender la demanda de agua de sus habitantes. A mediados del siglo XX se capta para consumo de los habitantes cordobeses agua del manantial Los Berros, ubicado en el municipio de Ixtaczoquitlán, Ver.
Adicionalmente, en la década de los ochenta del siglo pasado se construye la infraestructura para consumir el agua del manantial Dos Arroyos, también ubicado en el Municipio de Ixtaczoquitlán.
Finalmente, en el año 2003, se pone en operación el Acueducto Nogales-Córdoba, que capta y conduce el agua de la Laguna de Nogales, para uso y consumo de los habitantes de la Ciudad de Córdoba.
El agua de la Laguna es captada de los excedentes que caen hacia el Arroyo Chiquito, estas demasías se calculan que son de alrededor de 1800 litros por segundo, de los cuales se captan 500 lps, 200 llegan a la ciudad de Orizaba y 300 a nuestra ciudad.</p>
							<div class="icons">
								<a href="#" class="fa fa-facebook-square"></a><!--
								--><a href="#" class="fa fa-twitter-square"></a><!--
								--><a href="#" class="fa fa-google-plus-square"></a><!--
								-->
							</div>
						</div>
					</div>
				</div>
				<!--/ about -->
			</div>
		</div>
		<!--/ page content section -->	
@stop
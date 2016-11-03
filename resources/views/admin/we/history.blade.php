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
		<div class="pic" style="background-image: url({{ asset('assets/pic/intro/about-ant.jpg') }})"></div>
		
		<div class="grid-row clearfix">
			<div class="page-title">NOSOTROS</div>
			<div class="page-subtitle">Historia</div>
			<div class="bread-crumbs"><a href="#">Inicio</a> - Historia </div>
		</div>
	</div>
	<!--/ page intro -->
	<!-- page content section -->
		<div class="page-content-section">
			<div class="grid-row">
				<!-- about -->
				<div class="block block-about-6">
					<div class="block-cont clearfix">
						<div class="grid-col grid-col-left grid-col-4">
							<img src="{{ asset('assets/pic/about/antec.jpg') }}" width="370" height="310" alt="">
							<div class="shadow"></div>
						</div>
						<div class="grid-col grid-col-right grid-col-8">
							<h3>Historia</h3>
							<p style="text-align: justify;">
								Con el objeto de satisfacer las necesidades de agua potable y alcantarillado de la población de la ciudad de Córdoba, Ver., en el año de 1976, se crea la Junta Federal de Agua Potable, misma que dependía directamente de la Secretaría de Recursos Hidráulicos.<br><br>
Posteriormente, en el año de 1982, los servicios de agua potable se descentralizan, dependiendo directamente del Gobierno del Estado de Veracruz, convirtiéndose la Junta Federal de Agua Potable en un organismo estatal denominado Comisión Estatal de Agua Potable y Alcantarillado (CEAPA); misma que en el año de 1985, cambia su nomenclatura, convirtiéndose en Comisión Estatal de Agua y Saneamiento (CEAS).<br><br>
Es en el año de 1990 cuando el Ejecutivo del Estado emite el Decreto por el cual se expide la Ley Número 72 de Agua y Saneamiento para el Estado de Veracruz-Llave, publicada en la Gaceta Oficial el 5 de junio de 1990 y en la que se establecen los lineamientos bajo los cuales se regirán los servicios de agua potable y alcantarillado en el Estado.<br><br>

							</p>
						</div>
					</div>
					<div class="block-cont clearfix">
						<div class="grid-col grid-col-left grid-col-11">
							<p style="text-align: justify;">
								
Es en el año de 1990 cuando el Ejecutivo del Estado emite el Decreto por el cual se expide la Ley Número 72 de Agua y Saneamiento para el Estado de Veracruz-Llave, publicada en la Gaceta Oficial el 5 de junio de 1990 y en la que se establecen los lineamientos bajo los cuales se regirán los servicios de agua potable y alcantarillado en el Estado.<br><br>
Mediante Decreto del Ejecutivo publicado en la Gaceta Oficial del Estado No. 150, el día 15 de Diciembre de 1990 se crea la Comisión Municipal de Agua Potable y Saneamiento (CMAPS) de Córdoba, Ver., como una entidad descentralizada con personalidad jurídica y patrimonio propios, misma que inicia sus operaciones como tal, en el año de 1992.<br><br>
En el mes de junio del año 2001, es derogada la Ley No. 72 y sustituida por la Ley No. 21 de Aguas del Estado de Veracruz-Llave, emitida por el Ejecutivo del Estado mediante Gaceta Oficial No. 130 del 29 de junio de 2001, y que en adelante regirá los servicios de agua potable, drenaje, alcantarillado, tratamiento y disposición de aguas residuales, en el Estado de Veracruz.<br><br>
En sesión de fecha treinta de Abril del 2007, el H. Cabildo del Municipio de Córdoba aprobó el acta constitutiva por la que se crea El Hidrosistema de Córdoba, como un Organismo Público Descentralizado, con autonomía de gestión, personalidad jurídica y patrimonio propio, el cual tiene como objetivo primordial brindar a la población de Córdoba, Ver., los servicios de agua potable, alcantarillado y saneamiento, en estricto cumplimiento de los lineamientos establecidos en la Ley Número 21 y demás aplicables al Sector.<br><br>
En el artículo 3 de esta Ley, encontramos el sustento legal del organismo el que menciona lo siguiente: “ARTICULO 3, Los ayuntamientos , de conformidad con lo dispuesto por la Ley Orgánica del municipio Libre, esta ley y demás leyes del Estado, prestarán directamente o a través de sus correspondientes Organismos Operadores los servicios de agua potable, drenaje, alcantarillado, tratamiento y disposición de aguas residuales. . . “<br><br>
Hidrosistema de Córdoba encuentra su sustento legal en el artículo 3 de la Ley 21 de Aguas del Estado de Veracruz-Llave.<br><br>
Sin embargo, como organismo descentralizado, con personalidad jurídica y patrimonio propios, deberá observar los siguientes Ordenamientos Legales:<br><br>
*Ley de Aguas Nacionales;<br>
*Ley General de Salud;<br>
*Ley de Obras Públicas y Servicios Relacionados con la Administración Pública Federal;<br>
*Ley 21 de Aguas del Estado de Veracruz-Llave;<br>
*Ley Orgánica del Municipio Libre del Estado de Veracruz;<br>
*Ley Federal de Trabajo<br>
*Contrato Colectivo de Trabajo;<br>
*Ley de Responsabilidades de los Servidores Públicos al servicio del Estado;<br>
*Ley de aprovechamiento de Aguas Nacionales;<br>
*Ley de Obras Públicas del Estado de Veracruz-Llave;<br>
*Ley de Adquisiciones, Arrendamientos, Servicios y Almacenes de la Administración Pública del Estado.<br>
*Ley Número 668 de Ingresos del Municipio de Córdoba del Estado de Veracruz de Ignacio de la Llave, correspondiente al Ejercicio Fiscal 2007.<br><br>
Reglamento interior de Hidrosistema
							</p>
							<div class="icons">
								<a href="#" class="fa fa-facebook-square"></a><!--
								--><a href="#" class="fa fa-twitter-square"></a><!--
								--><a href="#" class="fa fa-google-plus-square"></a><!--
								--><a href="#" class="fa fa-linkedin-square"></a>
							</div>
						</div>
					</div>
				</div>
				<!--/ about -->
			</div>
		</div>
		<!--/ page content section -->	
@stop
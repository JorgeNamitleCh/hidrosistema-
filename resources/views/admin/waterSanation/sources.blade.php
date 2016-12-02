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
		<div class="pic" style="background-image: url({{ asset('assets/pic/intro/tubos.jpg') }})"></div>
		
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
				<h1 class="text_h1">GASTOS EN DIFERENTES FUENTES DE ABASTECIMIENTO EN LA CIUDAD DE CÓRDOBA:</h1>
				<div class="block-head block-head-2"><i></i></div>
			<div class="col-md-3 animated zoomIn">
                <h1 class="text_h2">Captación</h1>
                <p  class="format_text">POBLACIÓN ATENDIDA <br><br>

					1.-Manantial Los Berros <br>
					2.-Manantial Dos Arroyos <br>
					3.-Acueducto Nogales- Córdoba <br> <br>


					TOTAL <br><br>


					Población Atendida <br>
					Nº tomas domiciliarias</p>
            </div>
            <div class="col-md-3 animated zoomIn">
                <h1 class="text_h2">.........................</h1>
                <p  class="format_text">184,654 hab. aprox <br><br>

					84.79 litros por segundo <br>
					48.20 litros por segundo <br>
					305.00 litros por segundo <br><br>


					437.99 litros por segundo <br><br>

					184,654 hab. <br>
					50,618 </p>
            </div>
			<div class="col-md-6 animated zoomIn">
				<div class="embed-responsive embed-responsive-16by9">
				    <iframe width="560" height="315" src="https://www.youtube.com/embed/NV3gsqSRN-g" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div><!-- grid-row -->
		<br><br>
		<div class="grid-row">
			<div class="block-head block-head-2"><i></i></div>
			<div class="col-md-3 animated zoomIn">
				<p  class="format_text">
				AGUA PARA TODOS <br>

				<br> Guadalupe Barreal
				<br> San Isidro Palotal
				<br> Tecama Calería (Sabana Larga)
				<br> 5ta. Manzana del Barreal
				<br> La Luz Palotal
				<br> Palenque Palotal
				<br> Santa Elena
				<br> La Reforma (4° Manzana)
				<br> La Palma (3° Manzana)
				<br> Kilómetro 14
				<br> Col. Agua Fría
				<br> Col. Las Margaritas
				<br> Col. Agrícola
				<br> Cosaltepec
				<br> Santa Teresa
				<br> Col. San Martín </p>
			</div>
			<div class="col-md-3 animated zoomIn">
				<p  class="format_text">
				LOCALIDADES ATENDIDAS <br>

				<br> San Bartolo
				<br> Tinajitas
				<br> Cervantes y Lozada
				<br> Acayotla
				<br> Lagunilla	
				<br> Matlaquiahuitl
				<br> Ojo de Agua
				<br> Paredones
				<br> Rancho Quemado
				<br> Santa María
				<br> Loma chica
				<br> San José Loma Grande
				<br> San Pedro y Anexas
				<br> Bajío </p>
			</div>
			<div class="col-md-3 animated zoomIn">
				<p class="format_text">
				SAN JOSÉ DE TAPIA <br>

				<br>Pozo Profundo : 7 litros por segundo
				<br>No. Tomas : 327
				<br>Población Atendida : 1,593 habitantes <br><br>

				SIERRA DEL GALLEGO <br>

				<br>Manantial La Cueva: 40.0 litros p/s 
				<br>Nº de tomas domiciliarias: 1,325
				<br>Población Atendida: 5, 450 habitantes <br><br>
				</p>
			</div>
			<div class="col-md-3 animated zoomIn">
				<p class="format_text">
				LOCALIDADES ATENDIDAS <br><br>

				Agustín Millán
				<br>Los Mangos 
				<br>Cuauhtémoc
				<br>Zacatepec
				<br>20 de Noviembre
				</p> <br>

				<div class="list-group"> <style type="text/css"> .fa-lg{color: #ff4444;}</style>
                    <a href="{{ asset('storage/information/plano.pdf') }}"  target="_blank" class="list-group-item">
                        <h4 class="list-group-item-heading"><i target="_blank"class="fa fa-file-pdf-o pdf fa-lg"></i> Plano de Abastecimiento.pdf</h4>
                        <p class="list-group-item-text">Descarga el plano de abastecimiento de agua</p>
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
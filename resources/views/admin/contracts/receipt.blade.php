<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Recibos</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css"> 

</head>
<body>

	<div class="content">
		

		
		@foreach ($list_contracts as $contract) 
			<div class="row">
				
				<div class="card-panel teal lighten-1">{{ $contract['contrato'] }}</div>
				  
				    <div class="row">
					       @if(isset($contract['nombre']))
					          {{ $contract["nombre" ] }}
					        @endif
					  </div>
					  <div class="row">
					       @if(isset($contract['colonia']))
					          {{ $contract["colonia" ] }}
					        @endif
					  </div>
					  <div class="row">
					       @if(isset($contract['direccion']))
					          {{ $contract["direccion" ] }}
					        @endif
					  </div>
					  <div class="row">
					       @if(isset($contract['tarifa']))
					          {{ $contract["tarifa" ] }}
					        @endif
					  </div>
					  <div class="row">
					       @if(isset($contract['sector']))
					          {{ $contract["sector" ] }}
					        @endif
					  </div>
					  <div class="row">
					       @if(isset($contract['ruta']))
					          {{ $contract["ruta" ] }}
					        @endif
					  </div>
					  <div class="row">
					       @if(isset($contract['folio']))
					          {{ $contract["folio" ] }}
					        @endif
					  </div>
					  <div class="row">
					       @if(isset($contract['medidor']))
					          {{ $contract["medidor" ] }}
					        @endif
					  </div>
					  <div class="row">
					       @if(isset($contract['servicio']))
					          {{ $contract["servicio" ] }}
					        @endif
					  </div>
					  <div class="row">
					       @if(isset($contract['pagos_ven']))
					          {{ $contract["pagos_ven" ] }}
					        @endif
					  </div>
					  <div class="row">
					       @if(isset($contract['total']))
					          {{ $contract["total" ] }}
					        @endif
					  </div>
					  <div class="row">
					       @if(isset($contract['rfc_u']))
					          {{ $contract["rfc_u" ] }}
					        @endif
					  </div>
					  <div class="row">
					       @if(isset($contract['cve_dren']))
					          {{ $contract["cve_dren" ] }}
					        @endif
					  </div>
					  <div class="row">
					       @if(isset($contract['año']))
					          {{ $contract["año" ] }}
					        @endif
					  </div>
					  <div class="row">
					       @if(isset($contract['periodo']))
					          {{ $contract["periodo" ] }}
					        @endif
					  </div>
					  <div class="row">
					       @if(isset($contract['cons_promedio']))
					          {{ $contract["cons_promedio" ] }}
					        @endif
					  </div>
					  <div class="row">
					       @if(isset($contract['direccion_fiscal']))
					          {{ $contract["direccion_fiscal" ] }}
					        @endif
					  </div>
					  <div class="row">
					       @if(isset($contract['colonia_fiscal']))
					          {{ $contract["colonia_fiscal" ] }}
					        @endif
					  </div>
					  <div class="row">
					       @if(isset($contract['cve_ubica']))
					          {{ $contract["cve_ubica" ] }}
					        @endif
					  </div>
					  <div class="row">
					       @if(isset($contract['ciudad_fiscal']))
					          {{ $contract["ciudad_fiscal" ] }}
					        @endif
					  </div>
					  <div class="row">
					       @if(isset($contract['municipio_fiscal']))
					          {{ $contract["municipio_fiscal" ] }}
					        @endif
					  </div>
					  <div class="row">
					       @if(isset($contract['estado_fiscal']))
					          {{ $contract["estado_fiscal" ] }}
					        @endif
					  </div>
					  <div class="row">
					       @if(isset($contract['cod_post_fiscal']))
					          {{ $contract["cod_post_fiscal" ] }}
					        @endif
					  </div>
					  <div class="row">
					       @if(isset($contract['telefono_fiscal']))
					          {{ $contract["telefono_fiscal" ] }}
					        @endif
					  </div>
					  <div class="row">
					       @if(isset($contract['apellido_pat']))
					          {{ $contract["apellido_pat" ] }}
					        @endif
					  </div>
					  <div class="row">
					       @if(isset($contract['apellido_mat']))
					          {{ $contract["apellido_mat" ] }}
					        @endif
					  </div>
					  <div class="row">
					       @if(isset($contract['nombres']))
					          {{ $contract["nombres" ] }}
					        @endif
					  </div>
					  <div class="row">
					       @if(isset($contract['lec_anterior']))
					          {{ $contract["lec_anterior" ] }}
					        @endif
					  </div>
					  <div class="row">
					       @if(isset($contract['lec_actual']))
					          {{ $contract["lec_actual" ] }}
					        @endif
					  </div>
					  <div class="row">
					       @if(isset($contract['consumo']))
					          {{ $contract["consumo" ] }}
					        @endif
					  </div>
					  <div class="row">
					       @if(isset($contract['recibo']))
					          {{ $contract["recibo" ] }}
					        @endif
					  </div>
					  <div class="row">
					       @if(isset($contract['tot_apagar']))
					          {{ $contract["tot_apagar" ] }}
					        @endif
					  </div>
					  <div class="row">
					       @if(isset($contract['f_vencimiento']))
					          {{ $contract["f_vencimiento" ] }}
					        @endif
					  </div>
					  <div class="row">
					       @if(isset($contract['m3_facturados']))
					          {{ $contract["m3_facturados" ] }}
					        @endif
					  </div>
					  <div class="row">
					       @if(isset($contract['barcode']))
					          {{ $contract["barcode" ] }}
					        @endif
					  </div>

					  <div class="row">
					  	<table class="bordered">
					        <thead>
					          <tr>
					              <th data-field="id">Concepto</th>
					              <th data-field="name">Mes</th>
					              <th data-field="price">Rezago</th>
					          </tr>
					        </thead>

					        <tbody>
					          @foreach ($contract['conceptos'] as $concept)
					          	<tr>
					           		<td>{{  $concept['concepto'] }}</td>
					           		<td>{{  $concept['importe_a'] }}</td>
					           		<td>{{  $concept['importe_v'] }}</td>
					          	</tr>
					          @endforeach
					        </tbody>
					      </table>
					  </div>

			</div>

		@endforeach
	</div>
	

	 <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
    
</body>
</html>
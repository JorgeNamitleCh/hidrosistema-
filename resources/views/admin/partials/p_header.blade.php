<!-- page header top -->
<div id="page-header-top" class="page-header-top">
</div>
<!--/ page header top -->

<!-- page header bottom -->
<header id="page-header-bottom" class="page-header-bottom">
	<div class="grid-row">
		<!-- main search -->
		<div id="main-search" class="main-search">
			<button type="button" class="fa fa-search"></button>
			<form action="#">
				<input type="text" placeholder="Type keywords and press Enter">
				<button type="submit"></button>
			</form>
		</div>
		<!--/ main search -->
		
		<!-- logo -->
		<div class="logo">
			<span><a href="index.html"><img src="{{ asset('assets/img/logo.png') }}" ></a></span>
		</div> 
		<!--/ logo -->
		
		<!-- main nav -->
		<nav id="main-nav" class="main-nav">
			<a href="#" class="switcher">Menu<i class="fa fa-bars"></i></a>
			<ul>
				<li class="active">
					<a href="{{ url('/') }}">INICIO</a>
				</li>							
				<li>
					<a href="#">NOSOTROS<i class="fa fa-angle-down"></i></a>
					<ul>
						<li><a href="{{ url('we/philosophy') }}">FILOSOFÍA INSTITUCIONAL</a></li>
						<li><a href="{{ url('we/record') }}">ANTECEDENTES</a></li>
						<li><a href="{{ url('we/history') }}">HISTORIA</a></li>
						<li><a href="{{ url('we/record') }}">ORGANIGRAMA</a></li>
						<li><a href="{{ url('we/directory') }}">DIRECTORIO</a></li>
					</ul>
				</li>
				<li>
					<a href="#">SERVICIOS<i class="fa fa-angle-down"></i></a>
					<ul>
						<li><a href="{{ url('services/services') }}">SERVICIOS</a></li>
						<li><a href="{{ url('services/formalities') }}">TRAMITES</a></li>
						<li><a href="{{ url('services/information') }}">INFORMACIÓN</a></li>
					</ul>
				</li>
				<li>
					<a href="#">AGUA Y SANEAMIENTO<i class="fa fa-angle-down"></i></a>
					<ul>
						<li><a href="#">FUENTES DE ABASTECIMIENTO</a></li>
						<li><a href="#">DESINFECCIÓN Y DISTRIBUCIÓN</a></li>
						<li><a href="#">SANEAMIENTO</a></li>
						<li><a href="#">CONTROL Y CALIDAD DEL AGUA</a></li>
						<li><a href="#">NORMATIVIDAD</a></li>
						<li><a href="#">COSECHA DEL AGUA DE LLUVIA</a></li>
					</ul>
				</li>
				<li>
					<a href="http://transparencia.cordoba.gob.mx/">TRANSPARENCIA</a>
				</li>	
				<li>
					<a href="#">CULTURA DEL AGUA<i class="fa fa-angle-down"></i></a>
					<ul>
						<li><a href="{{ url('waterCulture/water') }}">EL AGUA</a></li>
						<li><a href="{{ url('waterCulture/history') }}">HISTORIA DEL AGUA EN CÓRDOBA</a></li>
						<li><a href="{{ url('waterCulture/worldWaterDay') }}">DÍA MUNDIAL DEL AGUA</a></li>
						<li><a href="{{ url('waterCulture/availabilityWater') }}">DISPONIBILIDAD DEL AGUA</a></li>
						<li><a href="{{ url('waterCulture/clubAquamigos') }}">CLUB DE AQUAMIGOS</a></li>
						<li><a href="{{ url('waterCulture/friendship') }}">AMISTAD CON EL AGUA</a></li>
					</ul>
				</li>
				<li>
					<a href="#">CONTACTO</a>
				</li>
			</ul>
		</nav>
		<!--/ main nav -->
	</div>
</header>
<div></div>
<!--/ page header bottom -->
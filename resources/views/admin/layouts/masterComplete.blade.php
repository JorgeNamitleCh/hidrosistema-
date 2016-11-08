<!DOCTYPE html>
<html>
	
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
	
	<head>
		<title>@yield('title')</title>

		<!-- metas -->
		<meta charset="utf-8">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
		<!--/ metas -->
		
		<!-- favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">
		<!--/ favicon -->
		<link rel="stylesheet" type="text/css" href="{{ asset(elixir('css/style.css')) }}">
		<!-- Bootstrap core CSS -->
	    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
	    <!-- Material Design Bootstrap -->
	    <link href="{{ asset('assets/css/mdb.css') }}" rel="stylesheet">
	    <!-- Your custom styles (optional) -->
	    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
	    <!-- styles -->
		{{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/elements.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/admin1.css') }}"> --}}
		

		
		
		
		<!-- Latest compiled and minified CSS -->
		
		

		@yield('styles')
	</head>
	<body>                        
		<div class="page">
			<!-- header -->
			@include('admin.partials.p_header')
			
				@yield('content')
			<!-- footer -->
			@include('admin.partials.footer')

		</div>


		<!--/ scripts -->
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyCboicx4wx9FUw2-I7uNgfk3701y2U4Ujw"></script>

		<script type="text/javascript">
			var openPhotoSwipe = function(){
				var pswpElement = document.querySelectorAll('.pswp')[0]
				// build items array
				var items = [
				    {
				        src: "{{ asset('assets/pic/recibo.png') }}",
				        w: 500,
				        h: 725
				    },
				    {
				        src: "{{ asset('assets/pic/recibo02.jpg') }}",
				        w: 500,
				        h: 725
				    }
				];

				// define options (if needed)
				var options = {
				    // optionName: 'option value'
				    // for example:
				    index: 0 // start at first slide
				};

				// Initializes and opens PhotoSwipe
				var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
				gallery.init();
			};

			//openPhotoSwipe();
			document.getElementById('gallery_opw').onclick = openPhotoSwipe;
			
		</script>

		{{-- scrips --}}


	    <!-- JQuery -->
	    <script type="text/javascript" src="{{ asset('assets/js/jquery-3.1.1.min.js') }}"></script>

	    <!-- Bootstrap tooltips -->
	    <script type="text/javascript" src="{{ asset('assets/js/tether.min.js') }}"></script>

	    <!-- Bootstrap core JavaScript -->
	    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

	    <!-- MDB core JavaScript -->
	    <script type="text/javascript" src="{{ asset('assets/js/mdb.min.js') }}"></script>

	    <script type="text/javascript" src="{{ asset(elixir('js/app.js')) }}"></script>

	
		<!-- Latest compiled and minified JavaScript -->

		<script type="text/javascript">
			$(document).ready(function(){
				initializeStaticMap();
			});
			function initializeStaticMap() {
				var lat = 18.892679;
				var lng = -96.947475;
                var mapCenter = new google.maps.LatLng(lat, lng);
                var mapOptions = {
                    zoom: 17,
                    center: mapCenter,
                    scrollwheel: false,
                    draggable: false,
                    clickableIcons: false,
                    streetViewControl:false,
                    disableDoubleClickZoom: true,
                    zoomControl: false,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };

                map = new google.maps.Map(document.getElementById('map_h') , mapOptions);
                geocoder = new google.maps.Geocoder;

                var hidro = {lat: 18.892679, lng: -96.947475};
                var maker = new google.maps.Marker({
                	position: hidro, 
                	map: map
                });
            }
		</script>

		@yield('scrips')

	</body>

<!-- Mirrored from wegodesign.net/wego-theme-themeforest-html-template/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Sep 2016 17:18:32 GMT -->
</html>
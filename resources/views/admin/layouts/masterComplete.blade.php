<!DOCTYPE html>
<html>
	
<!-- Mirrored from wegodesign.net/wego-theme-themeforest-html-template/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Sep 2016 17:13:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
	<head>
		<title>@yield('title')</title>

		<!-- metas -->
		<meta charset="utf-8">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
		<!--/ metas -->
		
		<!-- favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png')}}">
		<!--/ favicon -->
		
		<!-- styles -->
		<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/jquery.owl.carousel.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/js/rs-plugin/css/settings.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
		<!--/ styles -->
		
		<link rel="stylesheet" href="{{ asset('assets/css/photoswipe.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/default-skin/default-skin.css') }}">

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

		<!--[if lt IE 9]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.counter.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.knob.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.form.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.isotope.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.fancybox.pack.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.fancybox-media.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.imagesloaded.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.owl.carousel.min.js') }}"></script>
		<script src="{{ asset('assets/js/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
		<script src="{{ asset('assets/js/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>	
		<!--[if lt IE 10]><script src="js/jquery.placeholder.min.js"></script><![endif]-->
		<script src="{{ asset('assets/js/main.js') }}"></script>
		<!--/ scripts -->
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyCboicx4wx9FUw2-I7uNgfk3701y2U4Ujw"></script>

		<!-- tuner -->
		<link rel="stylesheet" href="{{ asset('assets/tuner/css/main.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/tuner/css/colorpicker.css') }}">
		<script src="{{ asset('assets/tuner/js/main.js') }}"></script>
		<script src="{{ asset('assets/tuner/js/colorpicker.js') }}"></script>
		<!-- gallery -->
		<script src="{{ asset('assets/js/photoswipe.min.js') }}"></script>
		<script src="{{ asset('assets/js/photoswipe-ui-default.min.js') }}"></script>

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
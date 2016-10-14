var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
	var tmpJavascript = 'resources/assets/js/tmp/';

	// core scripts
	mix.scripts([
		'plugins/jquery/jquery-2.1.4.min.js',
		'plugins/parsley/i18n/es.js',
		'plugins/parsley/parsley.min.js',
	], tmpJavascript + 'core.js', 'resources/assets/');

	// CSS
	mix.styles([
		// css files
		'./public/assets/css/main.css',
		'./public/assets/css/font-awesome.css',
		'./public/assets/css/jquery.fancybox.css',
		'./public/assets/css/jquery.owl.carousel.css',
		'./public/assets/js/rs-plugin/css/settings.css',
		'./public/assets/css/photoswipe.css',
		'./public/assets/css/default-skin/default-skin.css',

	], 'public/css/style.css');

	// Javascript
	// uncomment if have javascript
	mix.scripts([
		// javascript files
		'js/jquery.min.js',
		'js/jquery-ui.min.js',
		'js/jquery.counter.js',
		'js/jquery.knob.min.js',
		'js/jquery.form.min.js',
		'js/jquery.isotope.min.js',
		'js/jquery.validate.min.js',
		'js/jquery.countdown.min.js',
		'js/jquery.fancybox.pack.js',
		'js/jquery.fancybox-media.js',
		'js/jquery.imagesloaded.min.js',
		'js/jquery.owl.carousel.min.js',
		'js/rs-plugin/js/jquery.themepunch.tools.min.js',
		'js/rs-plugin/js/jquery.themepunch.revolution.min.js',

		'js/main.js',
		//gallery
		'js/photoswipe.min.js',
		'js/photoswipe-ui-default.min.js',

	], tmpJavascript+'vendor.js', 'resources/assets/');
	

	// Application
	//mix.browserify('bootstrap/app.js', tmpJavascript + 'bundle.js');

	mix.scripts([
		'core.js',
		'vendor.js', // uncomment if have javascript
		//'bundle.js',
	], 'public/js/app.js', tmpJavascript);

	//mix.version('js/app.js'); // comment if have javascript and css
	mix.version(['js/app.js', 'css/style.css']); // uncomment if have javascript and css
});
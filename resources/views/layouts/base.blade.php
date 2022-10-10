<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="google-site-verification" content="kXyeLMZJI1bP3ZOf0soXiVAcEZaWh2C_h647ppQbyhU">
    <title>@yield('title')</title>
    @yield('meta')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset("images/hesperis-tamuda.jpg") }}" rel="shortcut icon" type="image/vnd.microsoft.icon" />
	<link href="{{ asset("css/magnific-popup.css") }}" rel="stylesheet" />
	<link href="{{ asset("css/k2.fonts.css") }}" rel="stylesheet" />
	<link href="{{ asset("css/k2.css") }}" rel="stylesheet" />
	<link href="{{ asset("css/slimbox2.css") }}" rel="stylesheet" />
	<link href="{{ asset("css/template.css") }}" rel="stylesheet" media="screen" />
	<link href="{{ asset("css/print.css") }}" rel="stylesheet" media="print" />
	<link href="{{ asset("css/style.css") }}" rel="stylesheet" />
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	
	
	<link href="{{ asset("css/family.css") }}" rel="stylesheet" />
	<link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet" />
	<link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet" />
	<link href="{{ asset("css/jquery.fullpage.min.css") }}" rel="stylesheet" />
	<link href="{{ asset("css/legacy.css") }}" rel="stylesheet" />
	<link href="{{ asset("css/preset2.css") }}" rel="stylesheet" class="preset" />
	<link href="{{ asset("css/module_default.css") }}" rel="stylesheet" />
    <link href="{{ asset("css/header_default.css") }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	@yield('stylesheet')
	
</head>
<body>	
    @include('include.header')
     {{--start Body --}}
    @yield('body')
    {{--end Body --}}
    @include('include.footer')
    <script type="application/json" class="joomla-script-options new">{"system.keepalive":{"interval":840000,"uri":"\/fr\/index.php\/component\/ajax\/?format=json"}}</script>
	<script src="{{ asset("js/jquery.min.js") }}"></script>
	<script src="{{ asset("js/jquery-noconflict.js") }}"></script>
	<script src="{{ asset("js/jquery-migrate.min.js") }}"></script>
	<script src="{{ asset("js/jquery.magnific-popup.min.js") }}"></script>
	<script src="{{ asset("js/k2.frontend.js") }}"></script>
	<script src="{{ asset("js/mootools-core.js") }}"></script>
	<script src="{{ asset("js/core.js") }}"></script>
	<script src="{{ asset("js/slimbox2.js") }}"></script>
	<script src="{{ asset("js/behaviour.js") }}"></script>
	<script src="{{ asset("js/behaviour1.js") }}"></script>
	<script src="{{ asset("js/bootstrap.min.js") }}"></script>
	<script src="{{ asset("js/jquery.sticky.js") }}"></script>
	<script src="{{ asset("js/jquery.fullpage.min.js") }}"></script>
	<script src="{{ asset("js/main.js") }}"></script>
	<script src="{{ asset("js/custom.js") }}"></script>
	<script src="{{ asset("js/html5fallback.js") }}"></script>
	<script src="{{ asset("js/acymailing_module.js") }}" async="async"></script>
	<!--[if lt IE 9]><script src="{{ asset("/fr/media/system/js/polyfill.event.js?9ab04b67166cc715a6c4386b5a7113c4") }}"></script><![endif]-->
	<script src="{{ asset("js/keepalive.js") }}"></script>
    <script src="{{ asset("js/headerPage.js") }}"></script>
    <script src="{{ asset("js/headerPage1.js") }}"></script>
	
  
    @yield('javascript')

   <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-205945096-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-205945096-1');
</script>
 
</body>
</html>




    <script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link href="{{asset('css/admin/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('css/admin/bootstrap.min.css')}}" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="{{ asset('css/header.css') }}" rel="stylesheet">

<div id="body">
<header>
	<div id="app">
		<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
			<div class="container" >
				<a style="font-size:15px" class="navbar-brand" href="{{ url('/') }}">
					{{__('messages.welcome')}} 
				</a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">

					</ul>
					<ul class="navbar-nav ml-auto">
						 @guest
							@if (Route::has('login'))
								<li class="nav-item">
									<a  class="nav-link" data-target="#login" data-toggle="modal" href="#">{{ __('messages.login') }}</a>
								</li>
							@endif

							@if (Route::has('register'))
								<li class="nav-item">
									<a data-target="#register" data-toggle="modal" class="nav-link" href="#">{{ __('messages.register') }}</a>
								</li>
							@endif

						@else
							<li class="nav-item dropdown">
								<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
									{{ Auth::user()->name }}
								</a>

								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="{{ URL::to('logout') }}"
									onclick="event.preventDefault();
													document.getElementById('logout-form').submit();">
										{{ __('Logout') }}
									</a>

									<form id="logout-form" action="{{ URL::to('logout') }}" method="POST" class="d-none">
										@csrf
									</form>
								</div>
							</li>
						@endguest
						<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								<span class="flag-icon flag-icon-{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></span> {{ Config::get('languages')[App::getLocale()]['display'] }}
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								@foreach (Config::get('languages') as $lang => $language)
									@if ($lang != App::getLocale())
											<a style="font-size:15px" class="dropdown-item" href="{{ route('lang.switch', $lang) }}"><span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span> {{$language['display']}}</a>
									@endif
								@endforeach
								</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
	<section id="sp-header-center">
		<div class="container">
			<div class="row">
				<div id="sp-logo" class="col-xs-12 col-sm-4 col-md-4">
					<div class="sp-column ">
						<h1 class="logo">
							<a href="#">
								<img class="sp-default-logo" src="{{$logo->value}}" alt="{{$journalName->value}}">
							</a>
						</h1>
					</div>
				</div>
				<div id="sp-top3" class="col-xs-12 col-sm-7 col-md-8">
					<div class="sp-column ">
						<div class="sp-module ">
							<div class="sp-module-content">
								<div class="search"> <br>
									<form action="/search"  class="form-inline">
										<label for="mod-search-searchword" class="element-invisible"></label> 
										<input name="searchword" id="mod-search-searchword" maxlength="200"  class="inputbox search-query" type="search" placeholder="Recherche..." />		
										<input type="hidden" name="task" value="search" />
										<input type="hidden" name="option" value="com_search" />
										<input type="hidden" name="Itemid" value="743" />
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</header>
	@if(App::getLocale()=='en' ||App::getLocale()=='fr')
			<div class="topnav" id="myTopnav" style="background-color:{{$backColor->value}}">
			    <div style="float: left;">
				@foreach($menus as $key => $value)
				<a style="color: {{$textNav->value}}" href="{{URL::to('/'.$value->key.'Page')}}" class="active">{{ strtoupper($value->key) }}</a>
				@endforeach
                </div>
				<div style="float: right;" >
					<a style="color: {{$textNav->value}}" target="_blank" href="https://www.facebook.com/hesperistamudaOfficiel/">
					<i class="fa fa-facebook"></i>
					</a>
					<a style="color: {{$textNav->value}}" target="_blank" href="#">
						<i class="fa fa-twitter"></i>
					</a>
					<a style="color: {{$textNav->value}}" target="_blank" href="#">
						<i class="fa fa-google-plus"></i>
					</a>
					<a style="color: {{$textNav->value}}" target="_blank" href="#">
						<i class="fa fa-pinterest"></i>
					</a>
				</div>
				<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
			</div>
	@else
	<div dir="rtl">
		<div class="topnav" id="myTopnav">
			<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
			<div  class="topnav1 " >
				<a style="color: {{$textNav->value}}" target="_blank" href="https://www.facebook.com/hesperistamudaOfficiel/">
				<i class="fa fa-facebook"></i>
				</a>
				<a style="color: {{$textNav->value}}" target="_blank" href="#">
					<i class="fa fa-twitter"></i>
				</a>
				<a style="color: {{$textNav->value}}" target="_blank" href="#">
					<i class="fa fa-google-plus"></i>
				</a>
				<a style="color: {{$textNav->value}}" target="_blank" href="#">
					<i class="fa fa-pinterest"></i>
				</a>
			</div>
			<div style="float: right; font-family: Georgia, 'Times New Roman', Times, serif">
				@foreach($menus as $key => $value)
				<a style="color: {{$textNav->value}}" href="{{URL::to('/'.$value->key.'Page')}}" class="active">{{ strtoupper($value->key) }}</a>
				@endforeach
				{{-- <div class="dropdown1">
					<button class="dropbtn"  >{{__('messages.derniersVolumes')}} 
					<i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown1-content">
					@foreach ($lastIssues as $lastIssue)
						<a href="/volume/{{$lastIssue->id_volume}}/fascicules" >{{$lastIssue->Titre}} {{$lastIssue->Nom_Volume}} ({{$lastIssue->Année}})</a>
					@endforeach
					</div>
				</div>
				<div class="dropdown1">
					<button class="dropbtn"  >{{__('messages.archive')}} 
					<i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown1-content">
						<a href="/archives-{{$tab[0]->Année}}-{{$tab[count($tab)-1]->Année}}" >{{$tab[0]->Titre}} ({{$tab[0]->Année}}-{{$tab[count($tab)-1]->Année}})</a>
						<a href="{{URL::to('/archives-2010-2019')}}" >هيسبريس-تمودا من 2010 الى 2019</a>
						<a href="{{URL::to('/archives_2009_2000')}}" >هيسبريس-تمودا من 2000 الى 2009</a>
						<a href="{{URL::to('/archives_1999_1990')}}" >هيسبريس-تمودا من 1990 الى 1999</a>
						<a href="{{URL::to('/archives_1989_1980')}}" >هيسبريس-تمودا من 1980 الى 1989</a>
						<a href="{{URL::to('/archives_1979_1970')}}" >هيسبريس-تمودا من 1970 الى 1979</a>
						<a href="{{URL::to('/archives_1969_1960')}}" >هيسبريس-تمودا من 1960 الى 1969</a>
						<a href="{{URL::to('/archives_1959_1950')}}" >هيسبريس من 1950 الى 1959</a>
						<a href="{{URL::to('/archives_1949_1940')}}" >هيسبريس من 1940 الى 1949</a>
						<a href="{{URL::to('/archives_1939_1930')}}" >هيسبريس من 1930 الى 1939</a>
						<a href="{{URL::to('/archives_1929_1921')}}" >هيسبريس من 1921 الى 1929</a>
					</div>
				</div> 
				<div class="dropdown1">
					<button class="dropbtn"  >{{__('messages.recommandation')}} 
					<i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown1-content">
						<a style="text-align: right" href="{{URL::to('/recommandation')}}">{{__('messages.recommandation')}}</a>
						<a style="text-align: right" href="{{URL::to('/recommandation/ethiques')}}">{{__('messages.titreEthique')}}</a>
					</div>
				</div> 
				<a href="{{URL::to('/comiteEditorial')}}" >{{__('messages.comiteEditorial')}}</a>
				<a  href="{{URL::to('/about')}}" >{{__('messages.a_propos')}}</a>
				<a href="{{URL::to('/')}}" class="active">{{__('messages.accueil')}}</a> --}}
			</div>
		</div>
	</div>
	@endif
<script>
  function myFunction() {
	var x = document.getElementById("myTopnav");
	if (x.className === "topnav") {
	  x.className += " responsive";
	} else {
	  x.className = "topnav";
	}
  }
</script>

	<div class="modal" tabindex="-1" role="dialog" id="login">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">{{__('messages.login')}}</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="POST" action="/doLogin">
					@csrf
					<div class="modal-body">
						@if(Session::has('register'))
							<div class="alert alert-dismissible alert-success">
								<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
								<strong>Well done!</strong> {{Session::get('register')}}
							</div>
						@endif
							<fieldset>
							<div class="form-group">
								<label for="exampleInputEmail1">Email</label>
								<input type="email" name="email" class="form-control"  placeholder="Enter email" required>
								<small  class="form-text text-muted">We'll never share your email with anyone else.</small>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">{{__('messages.password')}}</label>
								<input type="password" name="password" class="form-control" placeholder="Password" >
							</div>
							</fieldset>
						
						<hr>
						<div class="text-center">
							<a class="small" href="#">Forgot Password?</a>
						</div>
						<div class="text-center">
							<a class="small" href="{{URL::to('register')}}">Create an Account!</a>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-success">{{__('messages.login')}}</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	  <div class="modal" tabindex="-1" role="dialog" id="register">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">{{__('messages.register')}}</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="POST" action="/register">
					@csrf
					<div class="modal-body">
						@if(Session::has('register'))
							<div class="alert alert-dismissible alert-success">
								<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
								<strong>Well done!</strong> {{Session::get('register')}}
							</div>
						@endif
							<fieldset>
							<div class="form-group">
								<label for="exampleInputName1">Nom et Prénom</label>
								<input type="text" name="name" class="form-control" placeholder="Enter name" required>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Email</label>
								<input type="email" name="email" class="form-control"  placeholder="Enter email" required>
								<small  class="form-text text-muted">We'll never share your email with anyone else.</small>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">{{__('messages.password')}}</label>
								<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password"  required>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">{{__('messages.confirmPassword')}}</label>
								<input type="password" name="passwordConfirm" class="form-control" placeholder="Confirm Password"  required>
							</div>
							</fieldset>
						
						<hr>
						<div class="text-center">
							<a class="small" href="{{URL::to('/login')}}">Already have an account ?</a>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-success">{{__('messages.register')}}</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</form>
			</div>
		</div>
	  </div>
</div>







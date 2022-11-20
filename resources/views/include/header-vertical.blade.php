<!DOCTYPE html>
<html>
<head>
    
<style>
body {
  margin: 0;
}

#ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 20%;
  background-color: {{$backColor->value}};
  position: fixed;
  height: 100%;
  overflow: auto;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

</style>
</head>
<body>

<ul id="ul">
  <li><img src="{{$logo->value}}" alt="not found" style="width: inherit"/></li>
  @foreach($menus as $key => $value)
  <li><a href="{{URL::to('/'.$value->key.'Page')}}" style="text-decoration: none; color: {{$textNav->value}};">{{ strtoupper($value->key) }}</a></li>
  @endforeach
  <hr style="border-top: 1px solid {{$textNav->value}}">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto" >
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a style="color: {{$textNav->value}}" class="nav-link" data-target="#login" data-toggle="modal" href="#">{{ __('messages.login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a style="color: {{$textNav->value}}" data-target="#register" data-toggle="modal" class="nav-link" href="#">{{ __('messages.register') }}</a>
                    </li>
                @endif

            @else
                <li class="nav-item dropdown">
                    <a style="color: {{$textNav->value}}" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                <a style="color: {{$textNav->value}}" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <span class="flag-icon flag-icon-{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></span> {{ Config::get('languages')[App::getLocale()]['display'] }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                @foreach (Config::get('languages') as $lang => $language)
                    @if ($lang != App::getLocale())
                            <a style="font-size:15px; color: {{$textNav->value}}" class="dropdown-item" href="{{ route('lang.switch', $lang) }}"><span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span> {{$language['display']}}</a>
                    @endif
                @endforeach
                </div>
            </li>
        </ul>
    </div>
  <hr style="border-top: 1px solid {{$textNav->value}}">
  <li><a target="_blank" style="text-decoration: none; color: {{$textNav->value}}" href="https://www.facebook.com/hesperistamudaOfficiel/">
    <i class="fa fa-facebook"></i> &nbsp; Facebook
    </a></li>
  <li><a style="text-decoration: none; color: {{$textNav->value}}" href="#">
    <i class="fa fa-twitter"></i> &nbsp; Twitter
</a></li>
<hr style="border-top: 1px solid {{$textNav->value}}">

   <li>
    <a>
        <div class="row">
            <div class="col-12">
                <form action="/search"  class="form-group">
                    <label for="mod-search-searchword" class="element-invisible"></label> 
                    <div class="row">
                        <div class="col-12">
                            <input name="searchword" id="mod-search-searchword"  class="form-control" type="search" placeholder="Recherche..." />		
                            <input type="hidden" name="task" value="search" />
                            <input type="hidden" name="option" value="com_search" />
                            <input type="hidden" name="Itemid" value="743" />
                        </div>
                </div>
                </form>
            </div>
        </div>
    </a>
    </li>
</ul>
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
</body>
</html>


